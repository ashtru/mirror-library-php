# authorizenet_rest\CreditsApi

All URIs are relative to *https://api.authorize.net/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createACredit**](CreditsApi.md#createACredit) | **POST** /credits | 


# **createACredit**
> \authorizenet_rest\Model\Payment createACredit($body, $authorization)



Create A Credit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new authorizenet_rest\Api\CreditsApi();
$body = new \authorizenet_rest\Model\CreditRequest(); // \authorizenet_rest\Model\CreditRequest | 
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of ANET API request

try {
    $result = $api_instance->createACredit($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditsApi->createACredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\authorizenet_rest\Model\CreditRequest**](../Model/CreditRequest.md)|  |
 **authorization** | **string**| The value to provide in the Authorization header of ANET API request | [optional]

### Return type

[**\authorizenet_rest\Model\Payment**](../Model/Payment.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

