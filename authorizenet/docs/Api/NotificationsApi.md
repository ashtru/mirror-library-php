# Swagger\Client\NotificationsApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getNotification**](NotificationsApi.md#getNotification) | **GET** /notifications/{notificationsId} | Get a Notification
[**getNotifications**](NotificationsApi.md#getNotifications) | **GET** /notifications | Get Notifications


# **getNotification**
> \Swagger\Client\Model\GetNotificationResponse getNotification($notifications_id, $authorization)

Get a Notification

Retreives a notification history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationsApi();
$notifications_id = "notifications_id_example"; // string | ID of notification to return
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->getNotification($notifications_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notifications_id** | **string**| ID of notification to return |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\Swagger\Client\Model\GetNotificationResponse**](../Model/GetNotificationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNotifications**
> \Swagger\Client\Model\GetNotificationsResponse getNotifications($authorization, $delivery_status, $from_date, $to_date, $offset, $limit)

Get Notifications

Retreives notification history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\NotificationsApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request
$delivery_status = "delivery_status_example"; // string | Filter by delivery status
$from_date = "from_date_example"; // string | Only include notifications after date
$to_date = "to_date_example"; // string | Only include notifications before date
$offset = 56; // int | Only include notifications above of offset
$limit = 56; // int | Limit number of notifications

try {
    $result = $api_instance->getNotifications($authorization, $delivery_status, $from_date, $to_date, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]
 **delivery_status** | **string**| Filter by delivery status | [optional]
 **from_date** | **string**| Only include notifications after date | [optional]
 **to_date** | **string**| Only include notifications before date | [optional]
 **offset** | **int**| Only include notifications above of offset | [optional]
 **limit** | **int**| Limit number of notifications | [optional]

### Return type

[**\Swagger\Client\Model\GetNotificationsResponse**](../Model/GetNotificationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

