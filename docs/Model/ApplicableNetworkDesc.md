# ApplicableNetworkDesc

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Payment network code. | 
**label** | **string** | Display label of the payment network. | 
**method** | **string** | Indicates payment method this network belongs to. | 
**grouping** | **string** | Grouping code. Helps to group several payment networks together while displaying them on payment page (e.g. credit cards). | 
**registration** | **string** | Indicates whether this payment network supports registration and how this should be presented on payment page. | 
**recurrence** | **string** | Indicates whether this payment network supports recurring registration and how this should be presented on payment page. | 
**redirect** | **bool** | If &#x60;true&#x60; the payment via this network will result in redirect to the PSP web-site (e.g. PayPal, Sofortüberweisung, etc.). | 
**button** | **string** | Code of button-label when this network is selected. | [optional] 
**selected** | **bool** | If &#x60;true&#x60; this network should been initially pre-selected. | [optional] 
**contract_data** | **map[string,string]** | Map of public contract attributes (settings that are designed to be exposed, e.g. &#x60;button_color&#x60;) from the first possible route. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


