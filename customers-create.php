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
$curl->post($endpoint.'/customers', $data);

echo json_encode($curl->response);
$curl->close();