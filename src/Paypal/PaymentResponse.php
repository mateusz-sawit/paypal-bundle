<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:46
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class PaymentResponse
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-payment
 */
class PaymentResponse extends Payment
{
  /**
   * @var string
   * The ID of the payment.
   * Read only.
   */
  public $id;

  /**
   * @var string [created, approved, failed]
   * The state of the payment, authorization, or order transaction. Value is:
   *  * created. The transaction was successfully created.
   *  * approved. The customer approved the transaction. The state changes from created to approved on generation of the sale_id for sale transactions, authorization_id for authorization transactions, or order_id for order transactions.
   *  * failed. The transaction request failed.
   * Possible values: created, approved, failed.
   * Read only.
   */
  public $state;

  /**
   * @var string [UNABLE_TO_COMPLETE_TRANSACTION, INVALID_PAYMENT_METHOD, PAYER_CANNOT_PAY, CANNOT_PAY_THIS_PAYEE, REDIRECT_REQUIRED, PAYEE_FILTER_RESTRICTIONS]
   * The reason code for a payment failure.
   * Possible values: UNABLE_TO_COMPLETE_TRANSACTION, INVALID_PAYMENT_METHOD,
   *  PAYER_CANNOT_PAY, CANNOT_PAY_THIS_PAYEE, REDIRECT_REQUIRED, PAYEE_FILTER_RESTRICTIONS.
   * Read only.
   */
  public $failure_reason;

  /**
   * @var string
   * The date and time when the payment was created, in Internet date and time format.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * Read only.
   */
  public $create_time;

  /**
   * @var string
   * The date and time when the payment was updated, in Internet date and time format.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   * Read only.
   */
  public $update_time;

  /**
   * @var HateoasLink[]
   * An array of request-related HATEOAS links.
   * Read only.
   */
  public $links;
}
