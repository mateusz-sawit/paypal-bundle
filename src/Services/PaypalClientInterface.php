<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 10:25
 */

namespace Sawit\PaypalBundle\Services;


use Sawit\PaypalBundle\Exception\CommunicationException;

interface PaypalClientInterface
{
  const METHOD_GET = 'GET';
  const METHOD_POST = 'POST';
  const METHOD_PUT = 'PUT';
  const METHOD_PATCH = 'PATCH';
  const METHOD_DELETE = 'DELETE';

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
  public function absoluteRequest($url, $method, $body, $debug = false, $withStatus = false, $counter = 0);

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
  public function request($url, $method, $body, $debug = false, $withStatus = false, $counter = 0);
}
