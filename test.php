<?php

require __DIR__ . '/vendor/autoload.php';
use Playkids\ApiResponse\ApiResponse;

$apiResponse = new ApiResponse();
$response = $apiResponse->successResponse(['Hello World']);

var_dump($response);