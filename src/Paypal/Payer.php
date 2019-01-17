<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:50
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Payer
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-payer
 */
class Payer
{
  const METHOD_CREADIT_CARD = 'credit_card';
  const METHOD_PAYPAL = 'paypal';
  const METHOD_PAY_UPON_INVOICE = 'pay_upon_invoice';
  const METHOD_CARRIER = 'carrier';
  const METHOD_ALTERNATE_PAYMENT = 'alternate_payment';
  const METHOD_BANK = 'bank';

  const STATUS_VERIFIED = 'VERIFIED';
  const STATUS_UNVERIFIED = 'UNVERIFIED';

  /**
   * @var string [credit_card, paypal, pay_upon_invoice, carrier, alternate_payment, bank]
   * The payment method. The possible values are:
   *  * credit_card. Credit card.
   *  * paypal. A PayPal Wallet payment.
   *  * pay_upon_invoice. Pay upon invoice.
   *  * carrier. Carrier.
   *  * alternate_payment. Alternate payment.
   *  * bank. Bank.
   */
  public $payment_method;

  /**
   * @var string [VERIFIED, UNVERIFIED]
   * The status of payer's PayPal account. The possible values are:
   *  * VERIFIED.
   *  * UNVERIFIED.
   * Read only.
   */
  public $status;

  /**
   * @var FundingInstrument[]
   * An array of a single funding instrument for the current payment.
   * Valid only and required for the credit card payment method.
   * The array must include either a credit_card or credit_card_token object.
   * If the array contains more than one instrument, the payment is declined.
   */
  public $funding_instruments;

  /**
   * @var PayerInfo
   * The payer information.
   */
  public $payer_info;
}
