<?php
require_once    "../config/config.php";
require_once    "../config/auth.php";
$ProductID = $_GET['ProductID'];
$token = $_GET['access_token'];

?>

<?php

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.paypal.com/v1/billing/plans');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\n      \"product_id\": \"$ProductID\",\n      \"name\": \"Bronze Plan\",\n      \"description\": \"90 days access to all content\",\n      \"billing_cycles\": [\n        {\n          \"frequency\": {\n            \"interval_unit\": \"MONTH\",\n            \"interval_count\": 1\n          },\n          \"tenure_type\": \"TRIAL\",\n          \"sequence\": 1,\n          \"total_cycles\": 1\n        },\n        {\n          \"frequency\": {\n            \"interval_unit\": \"MONTH\",\n            \"interval_count\": 1\n          },\n          \"tenure_type\": \"REGULAR\",\n          \"sequence\": 2,\n          \"total_cycles\": 3,\n          \"pricing_scheme\": {\n            \"fixed_price\": {\n              \"value\": \"20\",\n              \"currency_code\": \"USD\"\n            }\n          }\n        }\n      ],\n      \"payment_preferences\": {\n        \"auto_bill_outstanding\": true,\n                  \"currency_code\": \"USD\"\n        },\n        \"setup_fee_failure_action\": \"CONTINUE\",\n        \"payment_failure_threshold\": 1\n      },\n      \"taxes\": {\n        \"inclusive\": false\n      }\n    }");

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Bearer '.rawurlencode($token);
$headers[] = 'Content-Type: application/json';
$headers[] = 'Paypal-Request-Id: '.rawurlencode($PlanID);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$err = curl_error($ch);
curl_close($ch);
if ($err) {
    # code...
    echo 'Error:'.$err;
}else {
    $response = json_decode($result);
    $PlanID = $response->id;
    //var_dump($PlanID);
    if ($PlanID) {
        header("Location: pay.php?PlanID=".$PlanID."&access_token=".$token);
    }
}

?>