# authorizenet_rest\PaymentmethodsApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPaymentMethod**](PaymentmethodsApi.md#createPaymentMethod) | **POST** /customers/{customerId}/paymentmethods | Create A Payment Method
[**deletePaymentmethod**](PaymentmethodsApi.md#deletePaymentmethod) | **DELETE** /customers/{customerId}/paymentmethods/{paymentMethodId} | Delete paymentmethods
[**getCustomerPaymentMethod**](PaymentmethodsApi.md#getCustomerPaymentMethod) | **GET** /customers/{customerId}/paymentmethods/{paymentMethodId} | Get Customer Payment Method
[**getCustomerPaymentMethods**](PaymentmethodsApi.md#getCustomerPaymentMethods) | **GET** /customers/{customerId}/paymentmethods | Get Customer Payment Methods
[**updatePaymentMethod**](PaymentmethodsApi.md#updatePaymentMethod) | **PUT** /customers/{customerId}/paymentmethods/{paymentMethodId} | Update A paymentMethod


# **createPaymentMethod**
> \authorizenet_rest\Model\PaymentMethod createPaymentMethod($customer_id, $create_payment_method, $authorization)

Create A Payment Method

Create A Payment Method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentmethodsApi();
$customer_id = "customer_id_example"; // string | Customer ID
$create_payment_method = new \authorizenet_rest\Model\CreatePaymentMethod(); // \authorizenet_rest\Model\CreatePaymentMethod | the \"CreatePaymentMethod\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createPaymentMethod($customer_id, $create_payment_method, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->createPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **create_payment_method** | [**\authorizenet_rest\Model\CreatePaymentMethod**](../Model/CreatePaymentMethod.md)| the \&quot;CreatePaymentMethod\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePaymentmethod**
> deletePaymentmethod($customer_id, $payment_method_id, $authorization)

Delete paymentmethods

Deletes a paymentmethods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentmethodsApi();
$customer_id = "customer_id_example"; // string | Customer ID
$payment_method_id = "payment_method_id_example"; // string | paymentMethod ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $api_instance->deletePaymentmethod($customer_id, $payment_method_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->deletePaymentmethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **payment_method_id** | **string**| paymentMethod ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentMethod**
> \authorizenet_rest\Model\PaymentMethod getCustomerPaymentMethod($customer_id, $payment_method_id, $authorization)

Get Customer Payment Method

Get Customer Payment Method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentmethodsApi();
$customer_id = "customer_id_example"; // string | Customer ID
$payment_method_id = "payment_method_id_example"; // string | paymentMethod ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getCustomerPaymentMethod($customer_id, $payment_method_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->getCustomerPaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **payment_method_id** | **string**| paymentMethod ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentMethods**
> \authorizenet_rest\Model\PaymentMethodCollection getCustomerPaymentMethods($customer_id, $authorization)

Get Customer Payment Methods

Get Customer Payment Methods

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentmethodsApi();
$customer_id = "customer_id_example"; // string | Customer ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getCustomerPaymentMethods($customer_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->getCustomerPaymentMethods: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\PaymentMethodCollection**](../Model/PaymentMethodCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentMethod**
> \authorizenet_rest\Model\PaymentMethod updatePaymentMethod($customer_id, $payment_method_id, $create_payment_method, $authorization)

Update A paymentMethod

Update A paymentMethod

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\PaymentmethodsApi();
$customer_id = "customer_id_example"; // string | Customer ID
$payment_method_id = "payment_method_id_example"; // string | paymentMethod ID
$create_payment_method = new \authorizenet_rest\Model\CreatePaymentMethod(); // \authorizenet_rest\Model\CreatePaymentMethod | the \"UpdateAPaymentMethod\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->updatePaymentMethod($customer_id, $payment_method_id, $create_payment_method, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentmethodsApi->updatePaymentMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **payment_method_id** | **string**| paymentMethod ID |
 **create_payment_method** | [**\authorizenet_rest\Model\CreatePaymentMethod**](../Model/CreatePaymentMethod.md)| the \&quot;UpdateAPaymentMethod\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\PaymentMethod**](../Model/PaymentMethod.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

