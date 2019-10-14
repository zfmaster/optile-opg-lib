# ChargeLinks

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | **string** | Link to &#x60;CHARGE&#x60; operation itself. | 
**customer** | **string** | Link to the registered customer. Appears only if &#x60;CHARGE&#x60; was initiated with registered customer information, or if a new customer was registered during this &#x60;CHARGE&#x60;. | [optional] 
**account** | **string** | Link to the registered account registred and/or used for this &#x60;CHARGE&#x60;. | [optional] 
**payout** | **string** | Link to &#x60;PAYOUT&#x60; operation. Appears only if current state of this &#x60;CHARGE&#x60; allows pay outs. Please notice that in the case of deferred &#x60;CHARGE&#x60; &#x60;PAYOUT&#x60; operation means a fully or partial cancellation (depends on provided amount), but in the case of NON deferred &#x60;CHARGE&#x60; the &#x60;PAYOUT&#x60; will trigger a refund. | [optional] 
**closing** | **string** | Link to &#x60;CLOSING&#x60; operation. Appears only in scope of deferred &#x60;CHARGE&#x60; and if current state of the &#x60;CHARGE&#x60; allows closings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


