# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_number** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**customer** | [**\authorizenet_rest\Model\Customer**](Customer.md) |  | [optional] 
**payer_name** | **string** |  | [optional] 
**payment_due_date** | **string** |  | [optional] 
**sub_amount** | **float** |  | [optional] 
**discount_percent** | **float** |  | [optional] 
**discount_amount** | **float** |  | [optional] 
**total_amount** | **float** |  | [optional] 
**line_items** | [**\authorizenet_rest\Model\LineItem[]**](LineItem.md) |  | [optional] 
**tax** | [**\authorizenet_rest\Model\Tax**](Tax.md) |  | [optional] 
**status** | **string** |  | [optional] 
**created_date** | **string** |  | [optional] 
**modified_date** | **string** |  | [optional] 
**transid** | **string** |  | [optional] 
**self** | [**\authorizenet_rest\Model\Link**](Link.md) |  | [optional] 
**supported_actions** | [**\authorizenet_rest\Model\Link[]**](Link.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


