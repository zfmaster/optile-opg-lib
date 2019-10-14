# ExpressPreset

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\ExpressPresetLinks**](ExpressPresetLinks.md) |  | 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time this &#x60;EXPRESSPRESET&#x60; was initiated at | 
**operation** | **string** | Type of this operation | 
**result_code** | **string** | Result code of this &#x60;EXPRESSPRESET&#x60; that reflects current state. See list of all [Result Codes](https://www.optile.io/opg#294007). | 
**result_info** | **string** | Descriptive information that complements the result code and interaction advice | 
**psp_code** | **string** | Code of a PSP service that was involved into this operation processing. Every PSP has a unique code assigned by OPG platform. | [optional] 
**return_code** | [**\Optile\Model\ReturnCode**](ReturnCode.md) |  | 
**status** | [**\Optile\Model\Status**](Status.md) | Current status of this &#x60;EXPRESSPRESET&#x60;. See list of all [Status Codes](https://www.optile.io/opg#285186). | 
**interaction** | [**\Optile\Model\Interaction**](Interaction.md) | Interaction advice for this &#x60;EXPRESSPRESET&#x60; according to its current state. | 
**identification** | [**\Optile\Model\Identification**](Identification.md) |  | 
**redirect** | [**\Optile\Model\Redirect**](Redirect.md) | If present, merchant is advised to redirect customer to corresponding redirect URL.  This will lead to either PSP web-site to complete initiated &#x60;EXPRESSPRESET&#x60; session, or it will be pointing to one of the merchants callback URLs from express preset session. | [optional] 
**customer** | [**\Optile\Model\Customer**](Customer.md) | Customer details that merchant has supplied when &#x60;EXPRESSPRESET&#x60; was initialized or updated. Important in cases when express preset is initialized from client side (browser). | [optional] 
**customer_collected_details** | [**\Optile\Model\CustomerCollectedDetails**](CustomerCollectedDetails.md) |  | [optional] 
**network** | **string** | Network code of this operation | 
**masked_account** | [**\Optile\Model\AccountMask**](AccountMask.md) |  | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) | Payment details that merchant has supplied when &#x60;EXPRESSPRESET&#x60; was initialized or updated. Important in cases when express preset is initialized from client side (browser). | 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) details that merchant has supplied when &#x60;EXPRESSPRESET&#x60; was initialized or updated. Important in cases when express preset is initialized from client side (browser). | [optional] 
**provider_response** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider response data supplied by provider (adapter) as a result of initialize / update / activate action. This object should contain all necessary data to pass into front-end JavaScript logic that complements express checkout flow on the client side. It is provider specific and in some cases can be &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


