<?php
require 'vendor/autoload.php';

use Curl\Curl;
$curl = new Curl();

$couponCode = $_REQUEST['couponCode'];
$consumer_key = 'ck_ad713bc399f8d63da81a3583057b3e7b3d0899d4';
$consumer_secret = 'cs_ee0259074bde553ce2008e6e0cd3994f99da77d5';
$endpoint = 'https://etesting.space/wp-json/wc/v3';

$curl->setBasicAuthentication($consumer_key, $consumer_secret);
$curl->setOpt(CURLOPT_RETURNTRANSFER , true);

$curl->get($endpoint.'/coupons/'.$couponCode);

echo json_encode($curl->response);
$curl->close();
