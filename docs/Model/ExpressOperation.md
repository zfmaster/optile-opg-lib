# ExpressOperation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Merchant transaction ID assigned to this express operation during payment step.  Note: This value is optional and if it is not set the &#x60;transactionId&#x60; from referred operation (&#x60;EXPRESSPRESET&#x60;) will be used during processing. | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) | Information about customers client (web browser, mobile device, etc.). If defined this will override information provided during &#x60;EXPRESSPRESET&#x60; initialization. | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) | Payment information. If defined this will override information provided during &#x60;EXPRESSPRESET&#x60; initialization. | [optional] 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. If defined this will override information provided during &#x60;EXPRESSPRESET&#x60; initialization. | [optional] 
**preselection** | [**\Optile\Model\RecurringPreselection**](RecurringPreselection.md) | **Experimental!** this option is not officially supported yet. It allows to differentiate between direct and deferred &#x60;CHARGE&#x60;. | [optional] 
**checkboxes** | **map[string,bool]** | Map of selected checkboxes. Name reflects the checkbox distinguish name, value reflects its state - &#x60;true&#x60; for checked, &#x60;false&#x60; for unchecked.  Note: this property has no processing implications at the moment. | [optional] 
**final_operation** | **bool** | Indicates that this is a final operation of this kind: final capture, update or refund and no future actions are expected. | [optional] 
**provider_request** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider request parameters that should be passed to the target payment provider adapter to complete the operation.  Note: there are no express preset providers at the moment that would expect any provider specific data passed during payment operation. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


