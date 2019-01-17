<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 10:03
 */

namespace Sawit\PaypalBundle\Services;


use Sawit\PaypalBundle\Exception\CommunicationException;
use Sawit\PaypalBundle\Paypal\{Agreement,
  AgreementResponse,
  AgreementTransaction,
  Amount,
  BillingPlan,
  BillingPlanResponse,
  Payment,
  PaymentResponse};

class PaypalService
{
  /**
   * @var PaypalClientInterface
   */
  private $paypalClient;

  public function __construct(PaypalClientInterface $paypalClient)
  {
    $this->paypalClient = $paypalClient;
  }

  /**
   * @param Payment $payment
   * @return PaymentResponse
   * @throws CommunicationException
   */
  public function createPayment(Payment $payment) {
    $body = json_encode($payment, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request('/payments/payment', PaypalClientInterface::METHOD_POST, $body);
    return $result;
  }

  /**
   * @param BillingPlan $billingPlan
   * @return BillingPlanResponse
   * @throws CommunicationException
   */
  public function createBillingPlan(BillingPlan $billingPlan) {
    $body = json_encode($billingPlan, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request('/payments/billing-plans', PaypalClientInterface::METHOD_POST, $body);
    return $result;
  }

  /**
   * @param Agreement $agreement
   * @return AgreementResponse
   * @throws CommunicationException
   */
  public function createAgreement(Agreement $agreement) {
    $body = json_encode($agreement, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request('/payments/billing-agreements', PaypalClientInterface::METHOD_POST, $body);
    return $result;
  }

  /**
   * @param string $billingPlanId
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function activateBillingPlan(string $billingPlanId) {
    $pathContent = [['op' => 'replace', 'path' => '/', 'value' => ['state' => 'ACTIVE']]];
    $body = json_encode($pathContent, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-plans/' . $billingPlanId,
      PaypalClientInterface::METHOD_PATCH,
      $body,
      false,
      true
    );
    return $result;
  }

  /**
   * @param string $payment_token
   * @return AgreementResponse
   * @throws CommunicationException
   */
  public function executeAgreement(string $payment_token) {
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $payment_token . '/agreement-execute',
      PaypalClientInterface::METHOD_POST,
      null
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @return AgreementResponse
   * @throws CommunicationException
   */
  public function getAgreementDetails(string $agreement_id) {
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id,
      PaypalClientInterface::METHOD_GET,
      null
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param string|null $note
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function billAgreementBalance(string $agreement_id, ?string $note = null) {
    $content = ['note' => $note];
    $body = json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/bill-balance',
      PaypalClientInterface::METHOD_POST,
      $body
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param string|null $note
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function cancelAgreement(string $agreement_id, ?string $note = null) {
    $content = ['note' => $note];
    $body = json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/cancel',
      PaypalClientInterface::METHOD_POST,
      $body,
      null,
      true
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param string|null $note
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function reActivateAgreement(string $agreement_id, ?string $note = null) {
    $content = ['note' => $note];
    $body = json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/re-activate',
      PaypalClientInterface::METHOD_POST,
      $body,
      null,
      true
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param Amount $amount
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function setBalanceAgreement(string $agreement_id, Amount $amount) {
    $body = json_encode($amount, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/set-balance',
      PaypalClientInterface::METHOD_POST,
      $body,
      null,
      true
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param string|null $note
   * @return StatusResponse
   * @throws CommunicationException
   */
  public function suspendAgreement(string $agreement_id, ?string $note = null) {
    $content = ['note' => $note];
    $body = json_encode($content, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/suspend',
      PaypalClientInterface::METHOD_POST,
      $body,
      null,
      true
    );
    return $result;
  }

  /**
   * @param string $agreement_id
   * @param \DateTime $start_date
   * @param \DateTime $end_date
   * @return AgreementTransaction[]
   * @throws CommunicationException
   */
  public function listAgreementTransactions(string $agreement_id, \DateTime $start_date, \DateTime $end_date) {
    $result = $this->paypalClient->request(
      '/payments/billing-agreements/' . $agreement_id . '/transactions?start_date='
        . $start_date->format('Y-m-d') . '&end_date=' . $end_date->format('Y-m-d'),
      PaypalClientInterface::METHOD_GET,
      null
    );
    return $result;
  }
}
