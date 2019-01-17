<?php
/**
 * Created by IntelliJ IDEA.
 * User: USER
 * Date: 16.01.2019
 * Time: 11:27
 */

namespace Sawit\PaypalBundle\Tests\Services;

use Sawit\PaypalBundle\Exception\CommunicationException;
use Sawit\PaypalBundle\Services\PaypalRestClient;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Dotenv\Dotenv;

class PaypalRestClientTest extends TestCase
{
  public function testDump() {
    $this->assertTrue(function_exists('dump'));
  }

  public function testRequest()
  {

    $dotenv = new Dotenv();
    $dotenv->load(__DIR__.'/../../.env');

    $this->assertTrue(true);
    $client = new PaypalRestClient(getenv('PAYPAL_TOKEN'), getenv('PAYPAL_SECRET'), true);
    try {
      $client->request('/test', 'GET', '',  true);
    } catch (CommunicationException $e) {
      dump($e);
    }
  }
}
