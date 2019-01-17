<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:30
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class MerchantPreferences
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-merchant_preferences
 */
class MerchantPreferences
{
  const AUTO_BILL_YES   = 'YES';
  const AUTO_BILL_NO    = 'NO';

  const INITIAL_FAIL_ACTION_CONTINUE  = 'CONTINUE';
  const INITIAL_FAIL_ACTION_CANCEL    = 'CANCEL';

  /**
   * @var Amount
   * The currency and amount of the set-up fee for the agreement.
   * This fee is the initial, non-recurring payment amount that is due immediately when the billing agreement is created.
   * Can be used as the initial amount to trigger the initial_fail_amount_action. The default for the amount is 0.
   */
  public $setup_fee;

  /**
   * @var string
   * The URL where the customer can cancel the agreement.
   */
  public $cancel_url;

  /**
   * @var string
   * The URL where the customer can approve the agreement.
   */
  public $return_url;

  /**
   * @var string
   * The URL where the customer is notified that the agreement was created. Read-only and reserved for future use.
   */
  public $notify_url;

  /**
   * @var string
   * The maximum number of allowed failed payment attempts. The default value, which is 0, defines infinite failed payment attempts.
   */
  public $max_fail_attempts;

  /**
   * @var string [YES, NO]
   * Indicates whether PayPal automatically bills the outstanding balance in the next billing cycle.
   * The outstanding balance is the total amount of any previously failed scheduled payments. Value is:
   *  * NO. PayPal does not automatically bill the customer the outstanding balance.
   *  * YES. PayPal automatically bills the customer the outstanding balance.
   * Possible values: YES, NO.
   */
  public $auto_bill_amount;

  /**
   * @var string [CONTINUE, CANCEL]
   * The action if the customer's initial payment fails. Value is:
   *  * CONTINUE. The agreement remains active and the failed payment amount is added to the outstanding balance.
   *      If auto-billing is enabled, PayPal automatically bills the outstanding balance in the next billing cycle.
   *  * CANCEL PayPal creates the agreement but sets its state to pending until the initial payment clears.
   *      If the initial payment clears, the pending agreement becomes active. If the initial payment fails,
   *      the pending agreement is canceled.
   * You can use the setup_fee value as the initial amount to trigger the initial_fail_amount_action.
   * Possible values: CONTINUE, CANCEL.
   */
  public $initial_fail_amount_action;

  /**
   * @var string
   * The payment types that are accepted for this plan. Read-only and reserved for future use.
   */
  public $accepted_payment_type;

  /**
   * @var string
   * The character set for this plan. Read-only and reserved for future use.
   */
  public $char_set;

}
