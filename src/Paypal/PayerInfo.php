<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:35
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class PayerInfo
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-payer_info
 */
class PayerInfo
{
  /**
   * @var string
   * The payer's email address. Maximum length is 127 characters.
   */
  public $email;

  /**
   * @var string
   * The payer's salutation.
   */
  public $salutation;

  /**
   * @var string
   * The payer's first name.
   */
  public $first_name;

  /**
   * @var string
   * The payer's middle name.
   */
  public $middle_name;

  /**
   * @var string
   * The payer's last name.
   */
  public $last_name;

  /**
   * @var string
   * The payer's suffix.
   */
  public $suffix;

  /**
   * @var string
   * The PayPal-assigned encrypted payer ID.
   */
  public $payer_id;

  /**
   * @var string
   * The birth date of the payer, in Internet date format. For example, 1990-04-12.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * @example 1990-04-12
   */
  public $birth_date;

  /**
   * @var string
   * The payer's tax ID. Supported for the PayPal payment method only.
   * Maximum length: 14.
   */
  public $tax_id;

  /**
   * @var string
   * The payer's tax ID type. Supported for the PayPal payment method only. The possible values are:
   *  * BR_CPF. BR CPF tax ID type.
   *  * BR_CNPJ. BR CNPJ tax ID type.
   */
  public $tax_id_type;

  /**
   * @var string
   * The payer's two-character IS0-3166-1 country code.
   * @see https://developer.paypal.com/docs/integration/direct/rest/country-codes/
   */
  public $country_code;

  /**
   * @var Address
   * The payer's billing address.
   */
  public $billing_address;

  /**
   * @var Address
   * Deprecated. The shipping address.
   * Use the shipping address for the purchase unit or at the root level of the checkout session.
   * @deprecated
   */
  public $shipping_address;
}
