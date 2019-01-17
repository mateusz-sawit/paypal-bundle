<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:55
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Item
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-item
 */
class Item
{
  /**
   * @var string
   * The stock keeping unit (SKU) for the item.
   * Maximum length: 127.
   */
  public $sku;

  /**
   * @var string
   * The item name. If this value is greater than the maximum allowed length, the API truncates the string.
   * Maximum length: 127.
   */
  public $name;

  /**
   * @var string
   * The item description. Supported for only the PayPal payment method.
   * Maximum length: 127.
   */
  public $description;

  /**
   * @var string
   * The item quantity. Must be a whole number.
   * Maximum length: 10.
   * Pattern: ^[0-9]{0,10}$.
   * required
   */
  public $quantity;

  /**
   * @var string
   * The item cost. Supports two decimal places.
   * Maximum length: 10.
   * Pattern: ^[0-9]{0,10}(\.[0-9]{0,2})?$.
   * required
   */
  public $price;

  /**
   * @var string
   * The three-character ISO-4217 currency code that identifies the currency.
   * Minimum length: 3.
   * Maximum length: 3.
   * @see https://developer.paypal.com/docs/integration/direct/rest/currency-codes/
   */
  public $currency;

  /**
   * @var string
   * The item tax. Supported only for the PayPal payment method.
   */
  public $tax;
}
