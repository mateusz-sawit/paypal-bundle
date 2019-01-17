<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 11:06
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class AuthToken
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/overview/#authentication-and-authorization
 */
abstract class AuthToken
{
  /**
   * @var string
   */
  public $scope;

  /**
   * @var string
   */
  public $nonce;

  /**
   * @var string
   */
  public $access_token;

  /**
   * @var string
   */
  public $token_type;

  /**
   * @var string
   */
  public $app_id;

  /**
   * @var integer
   */
  public $expires_in;
}
