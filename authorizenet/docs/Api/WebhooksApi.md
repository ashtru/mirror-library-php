# Swagger\Client\WebhooksApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhooksApi.md#createWebhook) | **POST** /webhooks | Create A Webhook
[**deleteWebhook**](WebhooksApi.md#deleteWebhook) | **DELETE** /webhooks/{webhookId} | Delete A Webhook
[**getWebhook**](WebhooksApi.md#getWebhook) | **GET** /webhooks/{webhookId} | Get A Webhook
[**getWebhooks**](WebhooksApi.md#getWebhooks) | **GET** /webhooks | List My Webhooks
[**pingsWebhook**](WebhooksApi.md#pingsWebhook) | **POST** /webhooks/{webhookId}/pings | Pings A Webhook
[**updateWebhook**](WebhooksApi.md#updateWebhook) | **PUT** /webhooks/{webhookId} | Update A Webhook


# **createWebhook**
> \Swagger\Client\Model\GetWebhookResponse createWebhook($create_webhook_body, $authorization)

Create A Webhook

Enroll in one or more particular type of event notification

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$create_webhook_body = new \Swagger\Client\Model\CreateWebhookBody(); // \Swagger\Client\Model\CreateWebhookBody | the \"CreateWebhookBody\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createWebhook($create_webhook_body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_webhook_body** | [**\Swagger\Client\Model\CreateWebhookBody**](../Model/CreateWebhookBody.md)| the \&quot;CreateWebhookBody\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\GetWebhookResponse**](../Model/GetWebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhook**
> deleteWebhook($webhook_id, $authorization)

Delete A Webhook

Delete an existing Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$webhook_id = "webhook_id_example"; // string | ID of webhook to return
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $api_instance->deleteWebhook($webhook_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| ID of webhook to return |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhook**
> \Swagger\Client\Model\GetWebhookResponse getWebhook($webhook_id, $authorization)

Get A Webhook

Retrieve details of an existing Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$webhook_id = "webhook_id_example"; // string | ID of webhook to return
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getWebhook($webhook_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| ID of webhook to return |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\GetWebhookResponse**](../Model/GetWebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Swagger\Client\Model\GetWebhookResponse[] getWebhooks($authorization)

List My Webhooks

Retrieve details of existing Webhooks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getWebhooks($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\GetWebhookResponse[]**](../Model/GetWebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pingsWebhook**
> pingsWebhook($webhook_id, $authorization)

Pings A Webhook

A test event is sent to the Webhook (in an inactive state) endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$webhook_id = "webhook_id_example"; // string | ID of webhook to return
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $api_instance->pingsWebhook($webhook_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->pingsWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| ID of webhook to return |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \Swagger\Client\Model\GetWebhookResponse updateWebhook($webhook_id, $update_webhook_body, $authorization)

Update A Webhook

Update an existing Webhook

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\WebhooksApi();
$webhook_id = "webhook_id_example"; // string | ID of webhook to return
$update_webhook_body = new \Swagger\Client\Model\CreateWebhookBody(); // \Swagger\Client\Model\CreateWebhookBody | the \"CreateWebhookBody\" model
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->updateWebhook($webhook_id, $update_webhook_body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | **string**| ID of webhook to return |
 **update_webhook_body** | [**\Swagger\Client\Model\CreateWebhookBody**](../Model/CreateWebhookBody.md)| the \&quot;CreateWebhookBody\&quot; model |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\GetWebhookResponse**](../Model/GetWebhookResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

