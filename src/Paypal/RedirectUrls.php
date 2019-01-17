<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:53
 */

namespace Sawit\PaypalBundle\Paypal;


class RedirectUrls
{
  /**
   * @var string
   * The URL where the payer is redirected after he or she approves the payment.
   * Required for PayPal account payments.
   */
  public $return_url;

  /**
   * @var string
   * The URL where the payer is redirected after he or she cancels the payment.
   * Required for PayPal account payments.
   */
  public $cancel_url;
}
