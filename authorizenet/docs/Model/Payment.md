# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\PaymentLinks**](PaymentLinks.md) |  | [optional] 
**id** | **string** |  | [optional] 
**solution** | [**\Swagger\Client\Model\Solution**](Solution.md) |  | [optional] 
**batch** | [**\Swagger\Client\Model\Batch**](Batch.md) |  | [optional] 
**submit_time_utc** | **string** |  | [optional] 
**submit_time_local** | **string** |  | [optional] 
**transaction_status** | **string** |  | [optional] 
**processor** | [**\Swagger\Client\Model\Processor**](Processor.md) |  | [optional] 
**recurring_billing** | **bool** |  | [optional] 
**customer_ip** | **string** |  | [optional] 
**order** | [**\Swagger\Client\Model\Order**](Order.md) |  | [optional] 
**auth_amount** | **string** |  | [optional] 
**settle_amount** | **string** |  | [optional] 
**tax** | [**\Swagger\Client\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**shipping** | [**\Swagger\Client\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**duty** | [**\Swagger\Client\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**line_items** | [**\Swagger\Client\Model\LineItem[]**](LineItem.md) |  | [optional] 
**tax_exempt** | **bool** |  | [optional] 
**payment_instrument** | [**\Swagger\Client\Model\PaymentInstrument**](PaymentInstrument.md) |  | [optional] 
**fraud_information** | [**\Swagger\Client\Model\FraudInformation**](FraudInformation.md) |  | [optional] 
**customer_id** | **string** |  | [optional] 
**bill_to** | [**\Swagger\Client\Model\BaseAddress**](BaseAddress.md) |  | [optional] 
**ship_to** | [**\Swagger\Client\Model\BaseAddress**](BaseAddress.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


