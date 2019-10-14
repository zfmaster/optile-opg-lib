# Mandate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**reference** | **string** | The SEPA mandate reference (aka Mandate ID) proposed by the merchant. It has to be unique in the scope of his &#x60;creditorId&#x60;. | 
**creditor_id** | **string** | The SEPA creditor ID of the merchant. It can also be configured for some PSP within a contract. In this case the parameter is optional. In case when PSP uses its own creditor ID it will be returned in response and via status notification. | [optional] 
**authentication** | [**\Optile\Model\MandateAuthentication**](MandateAuthentication.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


