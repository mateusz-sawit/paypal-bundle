<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 09:01
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class PaymentOptions
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-payment_options
 */
class PaymentOptions
{
  /**
   * @var string [UNRESTRICTED, INSTANT_FUNDING_SOURCE, IMMEDIATE_PAY]
   * The payment method for this transaction. This field does not apply to the credit card payment method.
   * The possible values are:
   *  * UNRESTRICTED. Merchant does not have a preference on how they want the customer to pay.
   *  * INSTANT_FUNDING_SOURCE. Merchant requires that the customer pays with an instant funding source,
   *      such as a credit card or PayPal balance. All payments are processed instantly.
   *      However, payments that require a manual review are marked as pending.
   *      Merchants must handle the pending state as if the payment is not yet complete.
   *  * IMMEDIATE_PAY. Processes all payments immediately. Any payment that requires a manual review is marked failed.
   * Default: UNRESTRICTED.
   */
  public $allowed_payment_method;
}
