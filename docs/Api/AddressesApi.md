# authorizenet_rest\AddressesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerAddress**](AddressesApi.md#createCustomerAddress) | **POST** /customers/{customerId}/addresses | Create A Customer Address
[**deleteAddress**](AddressesApi.md#deleteAddress) | **DELETE** /customers/{customerId}/addresses/{addressId} | Delete Address
[**getAllCustomerAddresses**](AddressesApi.md#getAllCustomerAddresses) | **GET** /customers/{customerId}/addresses | Get All Customer Addresses
[**getCustomerAddress**](AddressesApi.md#getCustomerAddress) | **GET** /customers/{customerId}/addresses/{addressId} | Get A Customer Address
[**updateCustomerAddress**](AddressesApi.md#updateCustomerAddress) | **PUT** /customers/{customerId}/addresses/{addressId} | Update A Customer Address


# **createCustomerAddress**
> \authorizenet_rest\Model\Address createCustomerAddress($customer_id, $create_customer_address, $authorization)

Create A Customer Address

Create A Customer Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$create_customer_address = new \authorizenet_rest\Model\CreateCustomerAddress(); // \authorizenet_rest\Model\CreateCustomerAddress | the \"CreateCustomerAddress\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createCustomerAddress($customer_id, $create_customer_address, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->createCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **create_customer_address** | [**\authorizenet_rest\Model\CreateCustomerAddress**](../Model/CreateCustomerAddress.md)| the \&quot;CreateCustomerAddress\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAddress**
> deleteAddress($customer_id, $address_id, $authorization)

Delete Address

Deletes a Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$address_id = "address_id_example"; // string | Address ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $api_instance->deleteAddress($customer_id, $address_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->deleteAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **address_id** | **string**| Address ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCustomerAddresses**
> \authorizenet_rest\Model\AddressCollection getAllCustomerAddresses($customer_id, $authorization)

Get All Customer Addresses

Get All Customer Addresses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getAllCustomerAddresses($customer_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getAllCustomerAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\AddressCollection**](../Model/AddressCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerAddress**
> \authorizenet_rest\Model\Address getCustomerAddress($customer_id, $address_id, $authorization)

Get A Customer Address

Get A Customer Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$address_id = "address_id_example"; // string | Address ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getCustomerAddress($customer_id, $address_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->getCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **address_id** | **string**| Address ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomerAddress**
> \authorizenet_rest\Model\Address updateCustomerAddress($customer_id, $address_id, $create_customer_address, $authorization)

Update A Customer Address

Update A Customer Address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\AddressesApi();
$customer_id = "customer_id_example"; // string | Customer ID
$address_id = "address_id_example"; // string | address  ID
$create_customer_address = new \authorizenet_rest\Model\CreateCustomerAddress(); // \authorizenet_rest\Model\CreateCustomerAddress | the \"UpdateCustomerAddress\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->updateCustomerAddress($customer_id, $address_id, $create_customer_address, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressesApi->updateCustomerAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| Customer ID |
 **address_id** | **string**| address  ID |
 **create_customer_address** | [**\authorizenet_rest\Model\CreateCustomerAddress**](../Model/CreateCustomerAddress.md)| the \&quot;UpdateCustomerAddress\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Address**](../Model/Address.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

