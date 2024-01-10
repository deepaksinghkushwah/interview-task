<?php

namespace Mini\Controller;

use Curl\Curl;
use PDO;

class CurlController
{
  public $consumer_key = 'ck_ad713bc399f8d63da81a3583057b3e7b3d0899d4';
  public $consumer_secret = 'cs_ee0259074bde553ce2008e6e0cd3994f99da77d5';
  public $endpoint = 'https://etesting.space/wp-json/wc/v3';

  public function createCoupon()
  {
    $curl = new Curl();
    $curl->setBasicAuthentication($this->consumer_key, $this->consumer_secret);
    $curl->setOpt(CURLOPT_RETURNTRANSFER, true);
    $data = [
      'code' => 'ABC' . uniqid(),
      'discount_type' => 'percent',
      'amount' => '10',
      'individual_use' => true,
      'exclude_sale_items' => true,
      'minimum_amount' => '10.00'
    ];

    $curl->post($this->endpoint . '/coupons', $data);

    echo json_encode($curl->response);
    $curl->close();
  }

  public function validateCoupon()
  {
    $curl = new Curl();
    $couponCode = $_REQUEST['couponCode'];
    $curl->setBasicAuthentication($this->consumer_key, $this->consumer_secret);
    $curl->setOpt(CURLOPT_RETURNTRANSFER, true);

    $curl->get($this->endpoint . '/coupons/' . $couponCode);

    echo json_encode($curl->response);
    $curl->close();
  }

  public function createCustomer()
  {
    $curl = new Curl();
    $curl->setBasicAuthentication($this->consumer_key, $this->consumer_secret);
    $curl->setOpt(CURLOPT_RETURNTRANSFER, true);
    $data = [
      'email' => 'deepaksinghkushwah@gmail.com',
      'first_name' => 'Deepak',
      'last_name' => 'Kushwah',
      'username' => 'deepaksingh',
      'billing' => [
        'first_name' => 'Deepak',
        'last_name' => 'Kushwah',
        'company' => '',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
        'email' => 'deepaksinghkushwah@gmail.com',
        'phone' => '8233142631'
      ],
      'shipping' => [
        'first_name' => 'Deepak',
        'last_name' => 'Kushwah',
        'company' => '',
        'address_1' => '969 Market',
        'address_2' => '',
        'city' => 'San Francisco',
        'state' => 'CA',
        'postcode' => '94103',
        'country' => 'US',
      ]
    ];
    $curl->post($this->endpoint . '/customers', $data);

    echo json_encode($curl->response);
    $curl->close();
  }

  public function getCustomer()
  {
    $curl = new Curl();


    $curl->setBasicAuthentication($this->consumer_key, $this->consumer_secret);
    $curl->setOpt(CURLOPT_RETURNTRANSFER, true);

    $curl->get($this->endpoint . '/customers');

    echo json_encode($curl->response);
    $curl->close();
  }
}
