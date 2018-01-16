# RefundRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** |  | 
**order** | [**\authorizenet_rest\Model\Order**](Order.md) |  | [optional] 
**line_items** | [**\authorizenet_rest\Model\LineItem[]**](LineItem.md) |  | [optional] 
**tax** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**shipping** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**duty** | [**\authorizenet_rest\Model\ExtendedAmount**](ExtendedAmount.md) |  | [optional] 
**payment_instrument** | [**\authorizenet_rest\Model\PaymentInstrument**](PaymentInstrument.md) |  | 
**bill_to** | [**\authorizenet_rest\Model\BaseAddress**](BaseAddress.md) |  | [optional] 
**ship_to** | [**\authorizenet_rest\Model\BaseAddress**](BaseAddress.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


