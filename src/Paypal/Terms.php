<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:56
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Terms
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-terms
 */
class Terms
{
  /**
   * @var string
   * The ID of the terms.
   * Read only.
   */
  public $id;

  /**
   * @var string [MONTHLY, WEEKLY, YEARLY]
   * The term type.
   * Possible values: MONTHLY, WEEKLY, YEARLY.
   * required
   */
  public $type;

  /**
   * @var Amount
   * The currency and amount of the maximum billing amount for this term.
   * required
   */
  public $max_billing_amount;

  /**
   * @var string
   * The number of times that money can be pulled during this term.
   */
  public $occurrences;

  /**
   * @var Amount
   * The currency and amount range for this term.
   * required
   */
  public $amount_range;

  /**
   * @var string
   * Indicates whether the customer can edit the amount in this term.
   * required
   */
  public $buyer_editable;
}
