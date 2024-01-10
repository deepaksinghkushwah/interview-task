<?php
require 'vendor/autoload.php';

use Curl\Curl;
$curl = new Curl();

$consumer_key = 'ck_ad713bc399f8d63da81a3583057b3e7b3d0899d4';
$consumer_secret = 'cs_ee0259074bde553ce2008e6e0cd3994f99da77d5';
$endpoint = 'https://etesting.space/wp-json/wc/v3';

$curl->setBasicAuthentication($consumer_key, $consumer_secret);
$curl->setOpt(CURLOPT_RETURNTRANSFER , true);
$data = [
  'code' => 'ABC'.uniqid(),
  'discount_type' => 'percent',
  'amount' => '10',
  'individual_use' => true,
  'exclude_sale_items' => true,
  'minimum_amount' => '10.00'
];

$curl->post($endpoint.'/coupons', $data);

echo json_encode($curl->response);
$curl->close();


// Define the API endpoint
