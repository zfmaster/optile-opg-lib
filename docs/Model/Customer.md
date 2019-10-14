# Customer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_info** | [**\Optile\Model\AccountInfo**](AccountInfo.md) | Customer account information. | [optional] 
**number** | **string** | Customer identifier given by the merchant. Not validated for uniqueness by OPG. | 
**email** | **string** | Customer e-mail address. It is highly recommended to provide it, since it is a mandatory information for some PSP and often used by advanced risk management. | [optional] 
**delivery_email** | **string** | Customer delivery e-mail address. Represents email for electronic delivery for cases when it&#39;s not the same as customer&#39;s email. If not provided, &#x60;customer.email&#x60; will be used. | [optional] 
**birthday** | [**\DateTime**](\DateTime.md) | Customer birthday. Required by some PSPs and important for payments with advanced risk management. | [optional] 
**gender** | **string** | Customer gender. Required by some PSPs. | [optional] 
**name** | [**\Optile\Model\Name**](Name.md) |  | [optional] 
**company** | [**\Optile\Model\Company**](Company.md) | Information about company. Required by some PSPs when customer is a business. | [optional] 
**addresses** | [**\Optile\Model\CustomerAddresses**](CustomerAddresses.md) |  | [optional] 
**phones** | [**\Optile\Model\Phones**](Phones.md) |  | [optional] 
**registration** | [**\Optile\Model\Registration**](Registration.md) | Information about customer registration in OPG. | [optional] 
**identities** | [**\Optile\Model\Identities**](Identities.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


