<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:52
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Transaction
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-transaction
 */
class Transaction
{
  /**
   * @var Amount
   * The amount to collect.
   */
  public $amount;

  /**
   * @var Payee
   * The payee who receives the funds and fulfills the order.
   */
  public $payee;

  /**
   * @var string
   * The purchase description.
   * Maximum length: 127.
   */
  public $description;

  /**
   * @var string
   * The note to the recipient of the funds in this transaction.
   * Maximum length: 255.
   */
  public $note_to_payee;

  /**
   * @var string
   * The free-form field for the client's use.
   * Maximum length: 127.
   */
  public $custom;

  /**
   * @var string
   * The invoice number to track this payment.
   * Maximum length: 127.
   */
  public $invoice_number;

  /**
   * @var string
   * The soft descriptor to use to charge this funding source.
   * If greater than the maximum allowed length, the API truncates the string.
   * Maximum length: 22.
   */
  public $soft_descriptor;

  /**
   * @var PaymentOptions
   * The payment options for this transaction.
   */
  public $payment_options;

  /**
   * @var ItemList
   * An array of items that are being purchased.
   */
  public $item_list;

  /**
   * @var string
   * The URL to send payment notifications.
   * Maximum length: 2048.
   */
  public $notify_url;

  /**
   * @var RelatedResource[]
   * An array of payment-related transactions.
   * A transaction defines what the payment is for and who fulfills the payment.
   * Read only.
   */
  public $related_resources;
}
