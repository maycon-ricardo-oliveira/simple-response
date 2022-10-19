<?php

require __DIR__ . '/vendor/autoload.php';
use Mayconoliveira\SimpleResponse\ApiResponse;

$apiResponse = new ApiResponse();
$response = $apiResponse->successResponse(['Hello World']);

var_dump($response);