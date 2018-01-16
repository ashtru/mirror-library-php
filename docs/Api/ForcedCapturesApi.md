# Swagger\Client\ForcedCapturesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAForcedCapture**](ForcedCapturesApi.md#createAForcedCapture) | **POST** /forcedcaptures | 


# **createAForcedCapture**
> \Swagger\Client\Model\Payment createAForcedCapture($body, $authorization)



Create A Forced Capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\ForcedCapturesApi();
$body = new \Swagger\Client\Model\ForcedCaptureRequest(); // \Swagger\Client\Model\ForcedCaptureRequest | 
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
 **body** | [**\Swagger\Client\Model\ForcedCaptureRequest**](../Model/ForcedCaptureRequest.md)|  |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

