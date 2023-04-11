<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$key = $_ENV["RAZORPAY_API_KEY"];
$secret = $_ENV["RAZORPAY_API_SECRET"];

echo $key;
echo $secret;
  
