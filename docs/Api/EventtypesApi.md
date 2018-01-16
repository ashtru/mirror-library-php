# Swagger\Client\EventtypesApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEventTypes**](EventtypesApi.md#getEventTypes) | **GET** /eventtypes | Retrieving Event Types


# **getEventTypes**
> \Swagger\Client\Model\EventType[] getEventTypes($authorization)

Retrieving Event Types

Returns a list of all Webhooks event types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\EventtypesApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getEventTypes($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventtypesApi->getEventTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request |

### Return type

[**\Swagger\Client\Model\EventType[]**](../Model/EventType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

