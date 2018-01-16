# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\authorizenet_rest\Model\PaymentLinks**](PaymentLinks.md) |  | [optional] 
**id** | **string** |  | [optional] 
**solution** | [**\authorizenet_rest\Model\Solution**](Solution.md) |  | [optional] 
**batch** | [**\authorizenet_rest\Model\Batch**](Batch.md) |  | [optional] 
**submit_time_utc** | **string** |  | [optional] 
**submit_time_local** | **string** |  | [optional] 
**transaction_status** | **string** |  | [optional] 
**processor** | [**\authorizenet_rest\Model\Processor**](Processor.md) |  | [optional] 
**recurring_billing** | **bool** |  | [optional] 
**customer_ip** | **string** |  | [optional] 
**order** | [**\authorizenet_rest\Model\Order**](Order.md) |  | [optional] 
**auth_amount** | **string** |  | [optional] 
**settle_amount** | **string** |  | [optional] 
**tax** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**shipping** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**duty** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**line_items** | [**\authorizenet_rest\Model\LineItem[]**](LineItem.md) |  | [optional] 
**tax_exempt** | **bool** |  | [optional] 
**payment_instrument** | [**\authorizenet_rest\Model\PaymentInstrument**](PaymentInstrument.md) |  | [optional] 
**fraud_information** | [**\authorizenet_rest\Model\FraudInformation**](FraudInformation.md) |  | [optional] 
**customer_id** | **string** |  | [optional] 
**bill_to** | [**\authorizenet_rest\Model\BaseAddress**](BaseAddress.md) |  | [optional] 
**ship_to** | [**\authorizenet_rest\Model\BaseAddress**](BaseAddress.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


