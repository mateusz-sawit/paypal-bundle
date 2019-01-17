<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 14:46
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class Payment
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#payment_create
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-payment
 * Use for create request
 */
class Payment
{
  /**
   * @var string [sale, authorize, order]
   * The payment intent. Value is:
   *  * sale. Makes an immediate payment.
   *  * authorize. Authorizes a payment for capture later.
   *  * order. Creates an order.
   * Possible values: sale, authorize, order.
   * required
   */
  public $intent;

  /**
   * @var Payer
   * The source of the funds for this payment. Payment method is PayPal Wallet payment or bank direct debit.
   * required
   */
  public $payer;

  /**
   * @var ApplicationContext
   * Use the application context resource to customize payment flow experience for your buyers.
   */
  public $application_context;

  /**
   * @var Transaction[]
   * An array of payment-related transactions. A transaction defines what the payment is for and who fulfills the payment.
   * For update and execute payment calls, the transactions object accepts the amount object only.
   */
  public $transactions;

  /**
   * @var string
   * The PayPal-generated ID for the merchant's payment experience profile.
   * For information, see create web experience profile.
   * @see https://developer.paypal.com/docs/api/payment-experience/#web-profiles_create
   */
  public $experience_profile_id;

  /**
   * @var string
   * A free-form field that clients can use to send a note to the payer.
   * Maximum length: 165.
   */
  public $note_to_payer;

  /**
   * @var RedirectUrls
   * A set of redirect URLs that you provide for PayPal-based payments.
   */
  public $redirect_urls;
}
