<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:42
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class PaymentDefinition
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-payment_definition
 */
class PaymentDefinition
{
  const FREQUENCY_WEEK  = 'WEEK';
  const FREQUENCY_DAY   = 'DAY';
  const FREQUENCY_YEAR  = 'YEAR';
  const FREQUENCY_MONTH = 'MONTH';

  const TYPE_TRIAL    = 'TRIAL';
  const TYPE_REGULAR  = 'REGULAR';

  /**
   * @var string
   * The ID of the payment definition.
   * Read only.
   */
  public $id;

  /**
   * @var string
   * The payment definition name.
   * required
   */
  public $name;

  /**
   * @var string [TRIAL, REGULAR]
   * The payment definition type. Each plan must have at least one regular payment definition and, optionally,
   * a trial payment definition. Each definition specifies how often and for how long the customer is charged.
   * Possible values: TRIAL, REGULAR.
   * required
   */
  public $type;

  /**
   * @var string
   * The interval at which the customer is charged. Value cannot be greater than 12 months.
   * required
   */
  public $frequency_interval;

  /**
   * @var string [WEEK, DAY, YEAR, MONTH]
   * The frequency of the payment in this definition.
   * Possible values: WEEK, DAY, YEAR, MONTH.
   * required
   */
  public $frequency;

  /**
   * @var string
   * The number of payment cycles. For infinite plans with a regular payment definition, set cycles to 0.
   * required
   */
  public $cycles;

  /**
   * @var Amount
   * The currency and amount of the charge to make at the end of each payment cycle for this definition.
   * required
   */
  public $amount;

  /**
   * @var ChargeModel[]
   * An array of shipping fees and taxes.
   */
  public $charge_models;

}
