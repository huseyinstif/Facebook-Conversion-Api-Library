<?php
function sendFacebookPixelEvent($pixelID, $apiVersion, $accessToken, $eventType, $eventData = null, $userData = null, $testCode = null) {
  // Verify that the event type is a valid event type
  $validEventTypes = array(
    "PageView",
    "ViewContent",
    "AddToCart",
    "InitiateCheckout",
    "Purchase",
    "Lead",
    "CompleteRegistration",
    "AddPaymentInfo",
    "Search",
    "AddToWishlist",
    "Contact"
  );
  if (!in_array($eventType, $validEventTypes)) {
    return "Invalid event type: " . $eventType;
  }

  // Verify that required data has been entered
  if (!isset($pixelID) || !isset($apiVersion) || !isset($accessToken) || !isset($eventType)) {
    return "Missing data: pixelID, apiVersion, accessToken, and eventType are required.";
  }

  $data = array(
    "data" => array(
      array(
        "action_source" => "website",
        "event_id" => "Event Code",
        "event_name" => $eventType,
        "event_time" => floor(time())
      )
    )
  );

  // If eventData is provided, add event data
  if (isset($eventData)) {
    $data['data'][0]['custom_data'] = $eventData;
  }

  // If userData is provided, add user data
  if (isset($userData)) {
    $data['data'][0]['user_data'] = $userData;
  }

  // If testCode is provided, add test_event_code
  if (isset($testCode)) {
    $data['test_event_code'] = $testCode;
  }

  $url = 'https://graph.facebook.com/'.$apiVersion.'/'.$pixelID.'/events?access_token='.$accessToken;

  $ch = curl_init($url);
  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

  $response = curl_exec($ch);
  curl_close($ch);

  return $response;
}
?>