<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 07:47
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class ChargeModel
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments.billing-plans/v1/#definition-charge_models
 */
class ChargeModel
{
  /**
   * @var string
   * The ID of the charge model.
   * Read only
   */
  public $id;

  /**
   * @var string [TAX, SHIPPING]
   * The charge model type, which is tax or shipping.
   * Possible values: TAX, SHIPPING.
   * required
   */
  public $type;

  /**
   * @var Amount
   * The currency and amount of the shipping fee or tax.
   */
  public $amount;
}
