<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");
use Dotenv\Dotenv;
use PHPUnit\Framework\TestCase as PhpUnitTest;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

class TestCase extends PhpUnitTest
{
    public function testHello()
    {
      echo getenv("RAZORPAY");
      $this->assertTrue(true);
    }  
}
