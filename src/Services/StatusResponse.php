<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 09:46
 */

namespace Sawit\PaypalBundle\Services;


class StatusResponse
{
  private $response;
  private $http_code;

  /**
   * StatusResponse constructor.
   * @param mixed $response
   * @param $http_code
   */
  public function __construct($response, $http_code)
  {
    $this->response = $response;
    $this->http_code = $http_code;
  }

  /**
   * @return mixed
   */
  public function getResponse()
  {
    return $this->response;
  }

  /**
   * @return mixed
   */
  public function getHttpCode()
  {
    return $this->http_code;
  }
}
