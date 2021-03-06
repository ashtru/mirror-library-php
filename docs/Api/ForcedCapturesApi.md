# authorizenet_rest\ForcedCapturesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAForcedCapture**](ForcedCapturesApi.md#createAForcedCapture) | **POST** /forcedcaptures | 


# **createAForcedCapture**
> \authorizenet_rest\Model\Payment createAForcedCapture($body, $authorization)



Create A Forced Capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\ForcedCapturesApi();
$body = new \authorizenet_rest\Model\ForcedCaptureRequest(); // \authorizenet_rest\Model\ForcedCaptureRequest | 
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createAForcedCapture($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ForcedCapturesApi->createAForcedCapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\authorizenet_rest\Model\ForcedCaptureRequest**](../Model/ForcedCaptureRequest.md)|  |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

