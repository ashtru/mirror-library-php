# authorizenet_rest\InvoicesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createInvoice**](InvoicesApi.md#createInvoice) | **POST** /invoices | Create Invoice API
[**getAllInvoices**](InvoicesApi.md#getAllInvoices) | **GET** /invoices | Get List of Invoices
[**getInvoice**](InvoicesApi.md#getInvoice) | **GET** /invoices/{invoiceNumber} | Get Invoice Details
[**performActions**](InvoicesApi.md#performActions) | **POST** /invoices/{invoiceNumber}/actions | Perform an action on Invoice
[**updateInvoice**](InvoicesApi.md#updateInvoice) | **PUT** /invoices/{invoiceNumber} | Update Invoice API


# **createInvoice**
> \authorizenet_rest\Model\Invoice createInvoice($create_invoice, $authorization)

Create Invoice API

ANet API for creating new invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\InvoicesApi();
$create_invoice = new \authorizenet_rest\Model\CreateInvoice(); // \authorizenet_rest\Model\CreateInvoice | The \"create invoice \" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createInvoice($create_invoice, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_invoice** | [**\authorizenet_rest\Model\CreateInvoice**](../Model/CreateInvoice.md)| The \&quot;create invoice \&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllInvoices**
> \authorizenet_rest\Model\InvoicesCollection getAllInvoices($offset, $limit, $authorization)

Get List of Invoices

ANet API for getting list of invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\InvoicesApi();
$offset = 56; // int | Page offset number
$limit = 56; // int | Number of items to be returned
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getAllInvoices($offset, $limit, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getAllInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Page offset number |
 **limit** | **int**| Number of items to be returned |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\InvoicesCollection**](../Model/InvoicesCollection.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoice**
> \authorizenet_rest\Model\Invoice getInvoice($invoice_number, $authorization)

Get Invoice Details

ANet API to get invoice details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\InvoicesApi();
$invoice_number = "invoice_number_example"; // string | Invoice ID
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getInvoice($invoice_number, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Invoice ID |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **performActions**
> \authorizenet_rest\Model\Invoice performActions($invoice_number, $invoice_action, $authorization)

Perform an action on Invoice

ANet API to Perform an action on Invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\InvoicesApi();
$invoice_number = "invoice_number_example"; // string | Invoice ID
$invoice_action = new \authorizenet_rest\Model\InvoiceAction(); // \authorizenet_rest\Model\InvoiceAction | Perform an action on invoice
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->performActions($invoice_number, $invoice_action, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->performActions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Invoice ID |
 **invoice_action** | [**\authorizenet_rest\Model\InvoiceAction**](../Model/InvoiceAction.md)| Perform an action on invoice |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoice**
> \authorizenet_rest\Model\Invoice updateInvoice($invoice_number, $update_invoice, $authorization)

Update Invoice API

ANet APIs for editing an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\InvoicesApi();
$invoice_number = "invoice_number_example"; // string | Invoice ID
$update_invoice = new \authorizenet_rest\Model\UpdateInvoice(); // \authorizenet_rest\Model\UpdateInvoice | The \"update invoice \" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->updateInvoice($invoice_number, $update_invoice, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Invoice ID |
 **update_invoice** | [**\authorizenet_rest\Model\UpdateInvoice**](../Model/UpdateInvoice.md)| The \&quot;update invoice \&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Invoice**](../Model/Invoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

