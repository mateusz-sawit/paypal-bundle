<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:56
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class ItemList
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-item_list
 */
class ItemList
{
  /**
   * @var Item[]
   * An array of items that are being purchased.
   */
  public $items;

  /**
   * @var Address
   * The shipping address details.
   */
  public $shipping_address;

  /**
   * @var string
   * The shipping phone number, in its canonical international format as defined by the E.164 numbering plan.
   * Enables merchants to share payer’s contact number with PayPal for the current payment.
   * The final contact number for the payer who is associated with the transaction might be the same as or
   * different from the shipping_phone_number based on the payer’s action on PayPal.
   * Minimum length: 1.
   * Maximum length: 50.
   * @see https://en.wikipedia.org/wiki/E.164
   */
  public $shipping_phone_number;
}
