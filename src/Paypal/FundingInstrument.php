<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:33
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class FundingInstrument
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-funding_instrument
 */
class FundingInstrument
{
  /**
   * @var CreditCard
   * Deprecated. The credit card details. You can use this instrument to fund a payment. Use a payment card instead.
   * @deprecated
   * TODO: create CreditCard Class
   */
  public $credit_card;

  /**
   * @var CreditCardToken
   * The tokenized credit card details. You can use this instrument to fund a payment.
   * TODO: create CreditCardToken Class
   */
  public $credit_card_token;
}
