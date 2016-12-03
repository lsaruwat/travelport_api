<?php

$request = new HttpRequest();
$request->setUrl('https://zuw-api.travelport.com:443/connect/AirSearch/offers');
$request->setMethod(HTTP_METH_POST);

$request->setHeaders(array(
  'postman-token' => '44792999-a1c9-a099-98dc-55869be75219',
  'cache-control' => 'no-cache',
  'content-version' => '3',
  'authorization' => 'Basic VW5pdmVyc2FsIEFQSS91QVBJNTQ3NDI2MzYzMS0zMDkzMjdhNzp0PThKM2VGIXg/',
  'accept-version' => '2',
  'content-type' => 'application/json',
  'accept' => 'application/json'
));

$request->setBody('{
  "OffersSearchQuery" : {
    "@type" : "OffersSearchQuery",
    "maxNumberOfOffersToReturn" : 100,
    "PassengerCriteria" : [ {
      "value" : "ADT",
      "number" : 1
    } ],
    "SearchCriteriaSegment" : [ {
      "@type" : "SearchCriteriaSegment",
      "From" : {
      	"value" : "DEN"
      },
      "departureDate" : "2017-02-04",
      "To" : {
      	"value" : "ORD"
      }
    }],
    "PseudoCityInfo" : {
      "value" : "CV3"
    }
  }
}');

try {
  $response = $request->send();

  echo $response->getBody();
} catch (HttpException $ex) {
  echo $ex;
  echo "Error happened!";
}
