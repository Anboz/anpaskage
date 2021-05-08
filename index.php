<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 08.05.2021
 * Time: 9:19
 */
require 'vendor/autoload.php';

$message = $_GET['message'];

$exampleClass = new \Pay\ExapleClass($message);

$exampleClass->say();