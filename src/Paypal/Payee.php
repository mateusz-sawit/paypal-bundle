<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 09:03
 */

namespace Sawit\PaypalBundle\Paypal;


class Payee
{
  /**
   * @var string
   * The email address associated with the payee's PayPal account.
   * For an intent of authorize or order, the email address must be associated with a confirmed PayPal business account.
   * For an intent of sale, the email can either:
   *  * Be associated with a confirmed PayPal personal or business account.
   *  * Not be associated with a PayPal account.
   */
  public $email;

  /**
   * @var string
   * The PayPal account ID for the payee.
   */
  public $merchant_id;
}
