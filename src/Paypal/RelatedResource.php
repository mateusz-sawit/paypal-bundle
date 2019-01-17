<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 17.01.2019
 * Time: 08:54
 */

namespace Sawit\PaypalBundle\Paypal;

/**
 * Class RelatedResource
 * @package Sawit\PaypalBundle\Paypal
 * @see https://developer.paypal.com/docs/api/payments/v1/#definition-related_resources
 * TODO: create related classes and fill comments
 */
class RelatedResource
{
  public $sale;
  public $authorization;
  public $order;
  public $capture;
  public $refund;
}
