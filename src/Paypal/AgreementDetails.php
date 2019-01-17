<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 14:33
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class AgreementDetails
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#definition-agreement_details
 */
class AgreementDetails
{
  /**
   * @var Amount
   * The currency and amount of the outstanding balance for this agreement.
   */
  public $outstanding_balance;

  /**
   * @var string
   * The number of payment cycles remaining for this agreement.
   */
  public $cycles_remaining;

  /**
   * @var string
   * The number of payment cycles completed for this agreement.
   */
  public $cycles_completed;

  /**
   * @var string
   * The next billing date and time for this agreement, in Internet date and time format. For example, 2017-01-23T08:00:00Z.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   */
  public $next_billing_date;

  /**
   * @var string
   * The last payment date and time for this agreement, in Internet date and time format. For example, 2016-12-23T08:00:00Z.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   */
  public $last_payment_date;

  /**
   * @var Amount
   * The currency and amount of the last payment amount for this agreement.
   */
  public $last_payment_amount;

  /**
   * @var string
   * The final payment date and time for this agreement, in Internet date and time format. For example, 2017-09-23T08:00:00Z.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   */
  public $final_payment_date;

  /**
   * @var string
   * The total number of failed payments for this agreement.
   */
  public $failed_payment_count;
}
