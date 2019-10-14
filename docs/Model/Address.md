# Address

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**street** | **string** | Street name. | [optional] 
**house_number** | **string** | House number. May include suffix and prefix, e.g. \&quot;16a\&quot;, \&quot;64 app.32\&quot;. | [optional] 
**zip** | **string** | ZIP code / post code. | [optional] 
**city** | **string** | City | [optional] 
**state** | **string** | State. Name or code as it is used in the US or other countries with a strong federal structure. | [optional] 
**country** | **string** | Country code. Value format is according to ISO 3166-1 (alpha-2). | [optional] 
**name** | [**\Optile\Model\Name**](Name.md) | Indicates a recipient name of this address. This can be provided if, for example, the shipping address is related to a different name (person) than it is given in the customer object. | [optional] 
**company_name** | **string** | Company name. Should be specified for company addresses to complement or instead of recipient name. | [optional] 
**verified** | **bool** | Indicates if this address is verified or confirmed by merchant (or PSP).  Note: this is optional information and may not be always supplied by merchant or PSP. | [optional] 
**id** | **string** | Address identifier assigned by merchant. If assigned, products in shopping cart may refer to this address via &#x60;shippingAddressId&#x60; field. | [optional] 
**merchant_address** | **bool** | Indicates whether this address is managed by merchant (i.e. shop address) or not (customer address). | [optional] 
**first_time_use_date** | [**\DateTime**](\DateTime.md) | Date when address was used first time. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


