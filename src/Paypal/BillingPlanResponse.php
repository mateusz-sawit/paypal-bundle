<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:50
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class BillingPlanResponse
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-plan
 */
class BillingPlanResponse extends BillingPlan
{
  /**
   * @var string
   * The ID of the plan.
   * Read only.
   */
  public $id;

  /**
   * @var string [CREATED, ACTIVE, INACTIVE]
   * The plan status.
   * Possible values: CREATED, ACTIVE, INACTIVE.
   * Read only.
   */
  public $state;

  /**
   * @var string
   * The date and time when the plan was created, in Internet date and time format.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * Read only.
   */
  public $create_time;

  /**
   * @var string
   * The date and time when the plan was updated, in Internet date and time format.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * Read only.
   */
  public $update_time;

  /**
   * @var Terms[]
   * An array of terms for this plan. Read-only and reserved for future use.
   * Read only.
   */
  public $terms;

  /**
   * @var HateoasLink[]
   * An array of request-related HATEOAS links.
   * Read only.
   */
  public $links;
}
