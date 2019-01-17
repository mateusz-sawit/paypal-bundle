<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 10:22
 */

namespace Sawit\PaypalBundle\Services;


use Sawit\PaypalBundle\Exception\CommunicationException;
use Sawit\PaypalBundle\Paypal\AuthToken;

class PaypalRestClient implements PaypalClientInterface
{
  private const HOST_LIVE = 'https://api.paypal.com/v1';
  private const HOST_SANDBOX = 'https://api.sandbox.paypal.com/v1';

  private $host;
  private $clientId;
  private $clientSecret;
  private $testMode;

  /** @var string */
  private $token;
  /** @var integer */
  private $tokenExpiry;
  /** @var AuthToken */
  private $accessTokenData;

  public function __construct($clientId, $clientSecret, $testMode)
  {
    $this->clientId = $clientId;
    $this->clientSecret = $clientSecret;
    $this->testMode = $testMode;
    if($testMode) {
      $this->host = self::HOST_SANDBOX;
    }
    else {
      $this->host = self::HOST_LIVE;
    }
  }

  /**
   * @param $url
   * @param $method
   * @param $body
   * @param bool $debug
   * @param bool $withStatus
   * @param int $counter
   * @return mixed | StatusResponse
   * @throws CommunicationException
   */
  public function absoluteRequest($url, $method, $body, $debug = false, $withStatus = false, $counter = 0) {
    $curl = curl_init();
    $token = $this->getToken();

    curl_setopt_array($curl, [
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLINFO_HEADER_OUT => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_POSTFIELDS => $body,
      CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Authorization: Bearer " . $token,
        "Cache-Control: no-cache",
        "Content-Type: application/json"
      ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $info = curl_getinfo($curl);

    curl_close($curl);
    if ($err) {
      if(function_exists('dump')) {
        dump($info);
        dump($body);
        dump($err);
      }
      throw new CommunicationException("cURL Error #:" . $err);
    } else {
      if($debug && function_exists('dump')) {
        dump($info);
        dump($body);
        dump($response);
      }
    }
    if($info['http_code'] == 401 && $counter < 2) {
      $this->login();
      return $this->absoluteRequest($url, $method, $body, $debug, $withStatus, $counter+1);
    }

    if($withStatus) {
      return new StatusResponse(json_decode($response), $info['http_code']);
    }
    else {
      return json_decode($response);
    }
  }

  /**
   * @param $url
   * @param $method
   * @param $body
   * @param bool $debug
   * @param bool $withStatus
   * @param int $counter
   * @return mixed | StatusResponse
   * @throws CommunicationException
   */
  public function request($url, $method, $body, $debug = false, $withStatus = false, $counter = 0) {
    return $this->absoluteRequest($this->host . $url, $method, $body, $debug, $withStatus , $counter);
  }

  /**
   * @return mixed
   * @throws CommunicationException
   */
  private function getToken() {
    if($this->token && $this->tokenExpiry) {
      $now = time();
      if($now < $this->tokenExpiry) {
        return $this->token;
      }
    }
    $this->login();
    return $this->token;
  }

  /**
   * @throws CommunicationException
   */
  private function login() {
    $curl = curl_init();

    $basicToken = $this->clientId . ':' . $this->clientSecret;

    $urlEncodedData = 'grant_type=client_credentials';
    $optArray = array(
      CURLOPT_URL => $this->host . "/oauth2/token",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $urlEncodedData,
      CURLOPT_HTTPHEADER => array(
        "Accept: application/json",
        "Cache-Control: no-cache",
        "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Basic " . base64_encode($basicToken)
      ),
    );
    curl_setopt_array($curl, $optArray);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    $status = curl_getinfo($curl);

    curl_close($curl);

    if ($err || $status['http_code'] != 200) {
      if(function_exists('dump')) {
        dump($optArray);
        dump($status);
        dump($response);
        dump($err);
      }
      throw new CommunicationException("cURL Error #:" . $err);
    } else {
      $this->parseTokenResponse($response);
    }
  }

  private function parseTokenResponse($response) {
    /** @var AuthToken $responseData */
    $responseData = json_decode($response);
    $this->token = $responseData->access_token;
    $this->tokenExpiry = time() + $responseData->expires_in;
    $this->accessTokenData = $responseData;
  }
}
