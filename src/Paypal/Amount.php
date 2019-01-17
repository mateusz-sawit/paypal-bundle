<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:33
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Amount
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-currency
 */
class Amount
{
  /**
   * @var string
   * The three-character ISO-4217 currency code.
   * @see https://developer.paypal.com/docs/integration/direct/rest/currency-codes/
   */
  public $currency;

  /**
   * @var string
   * The value, which might be:
   *  * An integer for currencies like JPY that are not typically fractional.
   *  * A decimal fraction for currencies like TND that are subdivided into thousandths.
   * For the required number of decimal places for a currency code, see Currency codes - ISO 4217.
   * @see https://www.iso.org/iso-4217-currency-codes.html
   */
  public $value;

  public function __construct(?string $value = null, ?string $currency = null)
  {
    $this->currency = $currency;
    $this->value = $value;
  }
}
