# OperationResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**result_info** | **string** | Descriptive information that complements the interaction advice. | 
**interaction** | [**\Optile\Model\Interaction**](Interaction.md) | Interaction advice for the operation result. | 
**redirect** | [**\Optile\Model\Redirect**](Redirect.md) | If present, merchant is advised to redirect customer to corresponding redirect URL.  This will lead to either PSP web-site to complete initiated payment, or it will be pointing to one of the merchants callback URLs from &#x60;LIST&#x60; session. | [optional] 
**provider_response** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider response data given back by the target provider as a result of transaction action. This data should contain all needed information to continue customer&#39;s journey on the payment page in the scope of used network. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


