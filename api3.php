<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_PORT => "443",
  CURLOPT_URL => "https://zuw-api.travelport.com:443/connect/AirSearch/offers",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n  \"OffersSearchQuery\" : {\r\n    \"@type\" : \"OffersSearchQuery\",\r\n    \"maxNumberOfOffersToReturn\" : 100,\r\n    \"PassengerCriteria\" : [ {\r\n      \"value\" : \"ADT\",\r\n      \"number\" : 1\r\n    } ],\r\n    \"SearchCriteriaSegment\" : [ {\r\n      \"@type\" : \"SearchCriteriaSegment\",\r\n      \"From\" : {\r\n      \t\"value\" : \"DEN\"\r\n      },\r\n      \"departureDate\" : \"2017-02-04\",\r\n      \"To\" : {\r\n      \t\"value\" : \"ORD\"\r\n      }\r\n    }],\r\n    \"PseudoCityInfo\" : {\r\n      \"value\" : \"CV3\"\r\n    }\r\n  }\r\n}",
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "accept-version: 2",
    "authorization: Basic VW5pdmVyc2FsIEFQSS91QVBJNTQ3NDI2MzYzMS0zMDkzMjdhNzp0PThKM2VGIXg/",
    "cache-control: no-cache",
    "content-type: application/json",
    "content-version: 3",
    "postman-token: 7c699d31-a0c5-cf37-53a3-50b934b6da9a"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}