<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 09:26
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class AgreementResponse
 * @package Sawit\PaypalBundle\Paypal
 * https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#definition-agreement
 */
class AgreementResponse extends Agreement
{
  /**
   * @var string
   * The PayPal-generated ID for the resource.
   * Read only.
   */
  public $id;

  /**
   * @var string [Pending, Active, Suspended, Cancelled, Expired]
   * The state of the agreement. Value is:
   *  * Pending. The agreement awaits initial payment completion.
   *  * Active. The agreement is active and payments are scheduled.
   *  * Suspended. The agreement is suspended and payments are not scheduled until the agreement is reactivated.
   *  * Cancelled. The agreement is cancelled and payments are not scheduled.
   *  * Expired. The agreement is expired and no payments remain to be scheduled.
   * Read only.
   * Possible values: Pending, Active, Suspended, Cancelled, Expired.
   */
  public $state;

  /**
   * @var HateoasLink[]
   * An array of request-related HATEOAS links.
   * Read only.
   */
  public $links;
}
