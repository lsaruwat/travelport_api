import requests

url = "https://zuw-api.travelport.com:443/connect/AirSearch/offers"

payload = "{\r\n  \"OffersSearchQuery\" : {\r\n    \"@type\" : \"OffersSearchQuery\",\r\n    \"maxNumberOfOffersToReturn\" : 100,\r\n    \"PassengerCriteria\" : [ {\r\n      \"value\" : \"ADT\",\r\n      \"number\" : 1\r\n    } ],\r\n    \"SearchCriteriaSegment\" : [ {\r\n      \"@type\" : \"SearchCriteriaSegment\",\r\n      \"From\" : {\r\n      \t\"value\" : \"DEN\"\r\n      },\r\n      \"departureDate\" : \"2017-02-04\",\r\n      \"To\" : {\r\n      \t\"value\" : \"ORD\"\r\n      }\r\n    }],\r\n    \"PseudoCityInfo\" : {\r\n      \"value\" : \"CV3\"\r\n    }\r\n  }\r\n}"
headers = {
    'accept': "application/json",
    'content-type': "application/json",
    'accept-version': "2",
    'authorization': "Basic VW5pdmVyc2FsIEFQSS91QVBJNTQ3NDI2MzYzMS0zMDkzMjdhNzp0PThKM2VGIXg/",
    'content-version': "3",
    'cache-control': "no-cache",
    'postman-token': "07b7dd99-bac5-08f8-02af-f04873b23194"
    }

response = requests.request("POST", url, data=payload, headers=headers)

print(response.text)