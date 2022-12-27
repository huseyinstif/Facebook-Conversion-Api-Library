<?php
require_once("facebookPixel.php");

$pixelID = "YOUR_PIXEL_ID";
$apiVersion = "YOUR_API_VERSION";
$accessToken = "YOUR_ACCESS_TOKEN";
$testCode = "YOUR_TEST_CODE";

$eventData = array(
  "product_name" => "Pool Ring Soakers Citrus-Neon Coral Set of 2",
  "product_id" => "9397",
  "product_category" => "Set of 2",
  "currency" => "EUR",
  "value" => 176.00
);


$userData = array(
  "fn" => hash("sha256","Name"),
  "ln" => hash("sha256","Surname"),
  "ph" => hash("sha256","Phone Number"),
  "ge" => hash("sha256","Male"),
  "db" => hash("sha256","Birth MM/DD/YYYY"),
  "ct" => hash("sha256","New Jersey"),
  "st" => hash("sha256","NJ"),
  "zp" => hash("sha256","16000"),
  "country" => hash("sha256","US"),
  "em" => hash("sha256","info@example.com")
);

$response = sendFacebookPixelEvent($pixelID, $apiVersion, $accessToken, "CompleteRegistration", $eventData, $userData, $testCode);
echo $response;
?>