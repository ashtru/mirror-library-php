# Swagger\Client\CapturesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createACapture**](CapturesApi.md#createACapture) | **POST** /payments/{paymentId}/captures | 


# **createACapture**
> \Swagger\Client\Model\Payment createACapture($payment_id, $body, $authorization)



Create A Capture

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CapturesApi();
$payment_id = "payment_id_example"; // string | 
$body = new \Swagger\Client\Model\CaptureRequest(); // \Swagger\Client\Model\CaptureRequest | 
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createACapture($payment_id, $body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CapturesApi->createACapture: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **body** | [**\Swagger\Client\Model\CaptureRequest**](../Model/CaptureRequest.md)|  |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

