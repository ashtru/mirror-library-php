# authorizenet_rest\PaymentsApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createAPayment**](PaymentsApi.md#createAPayment) | **POST** /payments | 
[**getAPayment**](PaymentsApi.md#getAPayment) | **GET** /payments/{paymentId} | 
[**getAllPayments**](PaymentsApi.md#getAllPayments) | **GET** /payments | 


# **createAPayment**
> \authorizenet_rest\Model\Payment createAPayment($payment_request, $authorization)



Create A Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentsApi();
$payment_request = new \authorizenet_rest\Model\PaymentRequest(); // \authorizenet_rest\Model\PaymentRequest | charge credit card model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createAPayment($payment_request, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_request** | [**\authorizenet_rest\Model\PaymentRequest**](../Model/PaymentRequest.md)| charge credit card model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPayment**
> \authorizenet_rest\Model\Payment getAPayment($payment_id, $authorization)



Get A Payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentsApi();
$payment_id = "payment_id_example"; // string | 
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getAPayment($payment_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**|  |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllPayments**
> \authorizenet_rest\Model\PaymentCollection getAllPayments($authorization)



Get all Payments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentsApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getAllPayments($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->getAllPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\PaymentCollection**](../Model/PaymentCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

