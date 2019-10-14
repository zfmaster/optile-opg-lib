# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | Short description of the order given by merchant. This will appear on bank statements or invoices of customer account if supported by PSP and selected payment method. | 
**amount** | **double** | The total amount (including taxes, shipping, etc.) of this order in native format using \&quot;.\&quot; as decimal delimiter. Customer will be charged for this amount. | 
**currency** | **string** | Currency of this payment. Value format is according to ISO-4217 form, e.g. \&quot;EUR\&quot;, \&quot;USD\&quot;. | 
**invoice_id** | **string** | Invoice ID assigned by merchant to this payment. Max 128 characters. | [optional] 
**long_reference** | [**\Optile\Model\LongReference**](LongReference.md) |  | [optional] 
**planned_shipping_date** | [**\DateTime**](\DateTime.md) | Shipping date of pre-ordered items. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


