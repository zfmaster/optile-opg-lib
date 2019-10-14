# Preset

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\PresetLinks**](PresetLinks.md) |  | 
**result_info** | **string** | Descriptive information that complements the result code and interaction advice. | 
**status** | [**\Optile\Model\Status**](Status.md) | Current status of this &#x60;PRESET&#x60;. See list of all [Status Codes](https://www.optile.io/opg#285186). | 
**redirect** | [**\Optile\Model\Redirect**](Redirect.md) | If present, merchant is advised to redirect customer to corresponding redirect URL.  This will lead to either PSP web-site to complete initiated &#x60;PRESET&#x60;, or it will be pointing to one of the merchants callback URLs from &#x60;LIST&#x60; session. | [optional] 
**network** | **string** | Network code of preset network or account. | 
**masked_account** | [**\Optile\Model\AccountMask**](AccountMask.md) |  | [optional] 
**interaction** | [**\Optile\Model\Interaction**](Interaction.md) | Interaction advice for this &#x60;PRESET&#x60; according to its current state. | 
**result_code** | **string** | Result code of this &#x60;PRESET&#x60; that reflects current state. See list of all [Result Codes](https://www.optile.io/opg#294007). | 
**return_code** | [**\Optile\Model\ReturnCode**](ReturnCode.md) |  | [optional] 
**identification** | [**\Optile\Model\Identification**](Identification.md) |  | 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time this &#x60;PRESET&#x60; was initiated at. | 
**provider_response** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider response data given back by the target provider as a result of transaction action. This data should contain all needed information to continue customer&#39;s journey on the payment page in the scope of used network. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


