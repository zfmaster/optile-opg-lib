# CustomerCollectedDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number** | **string** | Customer number supplied by payment provider, this is the number this customer is identified by PSP and not by the merchant. | [optional] 
**email** | **string** | Customer email. | [optional] 
**verified** | **bool** | Indicates whether this customer information is verified by payment provider or not. In most of the cases it is relevant to customer email only. PSP does not explicitly indicates the validity of collected information if this property is not provided or set to &#x60;null&#x60;.  Note: customer addresses have separate indicator to indicate that. | [optional] 
**name** | [**\Optile\Model\Name**](Name.md) |  | [optional] 
**addresses** | [**\Optile\Model\CustomerAddresses**](CustomerAddresses.md) | Customers addresses supplied by payment provider. | [optional] 
**phones** | [**\Optile\Model\Phones**](Phones.md) | Customers phone numbers supplied by payment provider. | [optional] 
**message_to_merchant** | **string** | Textual message to merchant entered by the customer on PSP side during checkout process. E.g. fields &#x60;NOTE&#x60;, &#x60;PAYMENTREQUEST_n_NOTETEXT&#x60; in PayPal API.  Note: PayPal has deprecated the possibility to supply a note during checkout process, but it might still be supported by other PSPs. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


