<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 09:09
 */

namespace Sawit\PaypalBundle\Paypal;


/**
 * Class Agreement
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#billing-agreements_create
 * @see https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#definition-agreement
 */
class Agreement
{
  const STATE_PENDING   = 'Pending';
  const STATE_ACTIVE    = 'Active';
  const STATE_SUSPENDED = 'Suspended';
  const STATE_CANCELLED = 'Cancelled';
  const STATE_EXPIRED   = 'Expired';

  /**
   * @var string
   * The agreement name.
   * Maximum length: 128.
   * required
   */
  public $name;

  /**
   * @var string
   * The agreement description.
   * Maximum length: 128.
   * required
   */
  public $description;

  /**
   * @var string
   * The date and time when this agreement begins, in Internet date and time format.
   * The start date must be no less than 24 hours after the current date as the agreement can take up to 24 hours to activate.
   * The start date and time in the create agreement request might not match the start date and time that the API
   * returns in the execute agreement response. When you execute an agreement, the API internally converts the start
   * date and time to the start of the day in the time zone of the merchant account.
   * For example, the API converts a 2017-01-02T14:36:21Z start date and time for an account in the Berlin time
   * zone (UTC + 1) to 2017-01-02T00:00:00. When the API returns this date and time in the execute agreement response, it shows the converted date and time in the UTC time zone. So, the internal 2017-01-02T00:00:00 start date and time becomes 2017-01-01T23:00:00 externally.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * required
   */
  public $start_date;

  /**
   * @var AgreementDetails
   * The agreement details.
   */
  public $agreement_details;

  /**
   * @var Payer
   * The details for the customer who funds the payment.
   * The API gathers this information from execution of the approval URL.
   */
  public $payer;

  /**
   * @var Address
   * The shipping address for a payment. Must be provided if it differs from the default address.
   */
  public $shipping_address;

  /**
   * @var MerchantPreferences
   * The merchant preferences that override the default information in the plan.
   * If you omit this parameter, the agreement uses the default merchant preferences from the plan.
   * The merchant preferences include how much it costs to set up the agreement, the URLs where the customer
   * can approve or cancel the agreement, the maximum number of allowed failed payment attempts, whether PayPal
   * automatically bills the outstanding balance in the next billing cycle, and the action if the customer's
   * initial payment fails.
   */
  public $override_merchant_preferences;

  /**
   * @var ChargeModel[]
   * An array of charge models to override the charge models in the plan.
   * A charge model defines shipping fee and tax information.
   * If you omit this parameter, the agreement uses the default shipping fee and tax information from the plan.
   */
  public $override_charge_models;

  /**
   * @var BillingPlan
   * The ID of the plan on which this agreement is based.
   */
  public $plan;

}
