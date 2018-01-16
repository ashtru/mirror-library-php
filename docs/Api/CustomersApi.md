# Swagger\Client\CustomersApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomer**](CustomersApi.md#createCustomer) | **POST** /customers | Create A Customer
[**deleteCustomer**](CustomersApi.md#deleteCustomer) | **DELETE** /customers/{customerId} | Delete customer
[**getAllCustomers**](CustomersApi.md#getAllCustomers) | **GET** /customers | Get All Customers
[**getCustomer**](CustomersApi.md#getCustomer) | **GET** /customers/{customerId} | Get A Customer
[**updateCustomer**](CustomersApi.md#updateCustomer) | **PUT** /customers/{customerId} | Update A Customer


# **createCustomer**
> \Swagger\Client\Model\Customer createCustomer($create_customer, $authorization)

Create A Customer

Create A Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$create_customer = new \Swagger\Client\Model\CreateCustomer(); // \Swagger\Client\Model\CreateCustomer | the \"CreateCustomer\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createCustomer($create_customer, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_customer** | [**\Swagger\Client\Model\CreateCustomer**](../Model/CreateCustomer.md)| the \&quot;CreateCustomer\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomer**
> deleteCustomer($customer_id, $authorization)

Delete customer

Deletes a Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $api_instance->deleteCustomer($customer_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCustomers**
> \Swagger\Client\Model\CustomerCollection getAllCustomers($authorization)

Get All Customers

Get All Customers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getAllCustomers($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getAllCustomers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\CustomerCollection**](../Model/CustomerCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomer**
> \Swagger\Client\Model\Customer getCustomer($customer_id, $authorization)

Get A Customer

Get A Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getCustomer($customer_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomer**
> \Swagger\Client\Model\Customer updateCustomer($customer_id, $create_customer, $authorization)

Update A Customer

Update A Customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\CustomersApi();
$customer_id = "customer_id_example"; // string | Customer ID
$create_customer = new \Swagger\Client\Model\CreateCustomer(); // \Swagger\Client\Model\CreateCustomer | the \"UpdateCustomer\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->updateCustomer($customer_id, $create_customer, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **create_customer** | [**\Swagger\Client\Model\CreateCustomer**](../Model/CreateCustomer.md)| the \&quot;UpdateCustomer\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\Customer**](../Model/Customer.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

