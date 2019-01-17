<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:28
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class BillingPlan
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#billing-plans
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-plan
 * Use for create request
 */
class BillingPlan
{
  const TYPE_FIXED = 'FIXED';
  const TYPE_INFINITE = 'INFINITE';

  /**
   * @var string
   * The plan name.
   * required
   */
  public $name;

  /**
   * @var string
   * The plan description. Maximum length is 127 single-byte alphanumeric characters.
   * required
   */
  public $description;

  /**
   * @var string [FIXED, INFINITE]
   * The plan type. Indicates whether the payment definitions in the plan have a fixed number of or infinite payment cycles.
   * Value is:
   *  * FIXED. The plan has a fixed number of payment cycles.
   *  * INFINITE. The plan has infinite, or 0, payment cycles.
   * Allowed values: FIXED, INFINITE.
   * required
   */
  public $type;

  /**
   * @var PaymentDefinition[]
   * A payment definition, which determines how often and for how long the customer is charged.
   * Includes the interval at which the customer is charged, the charge amount, and optional shipping fees and taxes.
   */
  public $payment_definitions;

  /**
   * @var MerchantPreferences
   * The merchant preferences for a plan, which define how much it costs to set up the agreement,
   * the URLs where the customer can approve or cancel the agreement, the maximum number of allowed failed payment
   * attempts, whether PayPal automatically bills the outstanding balance in the next billing cycle, and the action
   * if the customer's initial payment fails.
   */
  public $merchant_preferences;
}
