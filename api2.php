<?php

$client = new http\Client;
$request = new http\Client\Request;

$body = new http\Message\Body;
$body->append('{
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

$request->setRequestUrl('https://zuw-api.travelport.com:443/connect/AirSearch/offers');
$request->setRequestMethod('POST');
$request->setBody($body);

$request->setHeaders(array(
  'postman-token' => '45b4923c-b269-2044-f60b-fbb5be2e57fd',
  'cache-control' => 'no-cache',
  'content-version' => '3',
  'authorization' => 'Basic VW5pdmVyc2FsIEFQSS91QVBJNTQ3NDI2MzYzMS0zMDkzMjdhNzp0PThKM2VGIXg/',
  'accept-version' => '2',
  'content-type' => 'application/json',
  'accept' => 'application/json'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();