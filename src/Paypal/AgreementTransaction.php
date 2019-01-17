<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 13:32
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class AgreementTransaction
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-agreements/v1/#definition-agreement_transaction
 */
class AgreementTransaction
{
  /**
   * @var string
   * The ID of the transaction.
   * Read only.
   */
  public $transaction_id;

  /**
   * @var string [Completed, Partially_Refunded, Pending, Refunded, Denied]
   * The current status of the transaction. Value is:
   *  * Completed. The transaction is complete and the money has been transferred to the payee.
   *  * Partially_Refunded. A part of the transaction amount has been refunded to the payer.
   *  * Pending. The transaction is pending settlement.
   *  * Refunded. The transaction amount has been refunded to the payer.
   *  * Denied. The transaction has been denied.
   * Read only.
   * Possible values: Completed, Partially_Refunded, Pending, Refunded, Denied.
   */
  public $status;

  /**
   * @var string
   * The type of transaction. Typically, Recurring Payment.
   * Read only.
   */
  public $transaction_type;

  /**
   * @var Amount
   * The currency and amount of the transaction.
   */
  public $amount;

  /**
   * @var Amount
   * The currency and amount of the transaction fee.
   */
  public $fee_amount;

  /**
   * @var Amount
   * The currency and amount of the transaction net amount.
   */
  public $net_amount;

  /**
   * @var string
   * The email ID of the customer.
   */
  public $payer_email;

  /**
   * @var string
   * The business name of the customer.
   */
  public $payer_name;

  /**
   * @var string
   * The date and time when the transaction occurred, in Internet date and time format.
   * @see https://tools.ietf.org/html/rfc3339#section-5.6
   */
  public $time_stamp;

  /**
   * @var string
   * The time zone of the update_time field.
   */
  public $time_zone;
}
