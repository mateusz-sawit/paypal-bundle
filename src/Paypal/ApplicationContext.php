<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:51
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class ApplicationContext
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-application_context
 */
class ApplicationContext
{
  /**
   * @var string
   * A label that overrides the business name in the merchant's PayPal account on the PayPal checkout pages.
   * Maximum length: 127.
   */
  public $brand_name;

  /**
   * @var string
   * The locale of pages that the PayPal payment experience displays.
   * A valid value is AU, AT, BE, BR, CA, CH, CN, DE, ES, GB, FR, IT, NL, PL, PT, RU, or US.
   * A five-character code is also valid for languages in these countries:
   *  da_DK, he_IL, id_ID, ja_JP, no_NO, pt_BR, ru_RU, sv_SE, th_TH, zh_CN, zh_HK, and zh_TW.
   */
  public $locale;

  /**
   * @var string [Billing, Login]
   * The type of landing page to show on the PayPal site for customer checkout.
   * To use the non-PayPal account landing page, set to Billing.
   * To use the PayPal account log in landing page, set to Login.
   */
  public $landing_page;

  /**
   * @var string [NO_SHIPPING, GET_FROM_FILE, SET_PROVIDED_ADDRESS]
   * The shipping preference. The possible values are:
   *  * NO_SHIPPING. Redacts the shipping address from the PayPal pages. Recommended for digital goods.
   *  * GET_FROM_FILE. Uses the customer-selected shipping address on PayPal pages.
   *  * SET_PROVIDED_ADDRESS. If available, uses the merchant-provided shipping address, which the customer cannot change on the PayPal pages. If the merchant does not provide an address, the customer can enter the address on PayPal pages.
   * Default: GET_FROM_FILE.
   */
  public $shipping_preference;

  /**
   * @var string [commit, continue]
   * The user action. Presents the customer with either the Continue or Pay Now checkout flow:
   *  * Pay Now - user_action=commit	After the customer is redirected to the PayPal payment page, shows the Pay Now button.
   *    Use this option when you know the final amount when checkout is initiated and you want to process the payment immediately when the customer clicks Pay Now.
   *  * Continue - user_action=continue	After the customer is redirected to the PayPal payment page, shows the Continue button.
   *    Use this option when you do not know the final amount when you initiate the checkout flow and you want to redirect the customer to the merchant page without processing the payment.
   */
  public $user_action;

}
