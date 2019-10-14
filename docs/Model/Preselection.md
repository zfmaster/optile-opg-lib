# Preselection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deferral** | **string** | Instructs a deferred behavior of payment networks. See [Deferred Payments](https://www.optile.io/opg#285066) for more details.  **Default** behavior is &#x60;NON_DEFERRED&#x60;. | [optional] 
**direction** | **string** | Defines a direction of initialized &#x60;LIST&#x60; session: &#x60;CHARGE&#x60; for payment direction, &#x60;PAYOUT&#x60; for pay out (credit). See [Payout Page](https://www.optile.io/opg#292237) for more details.  **Default** direction is &#x60;CHARGE&#x60;. | [optional] 
**networks** | **string** | Indicates what type of payment networks should appear in &#x60;LIST&#x60; response for selection.  **Default** behavior is &#x60;ANY&#x60;. | [optional] 
**network_codes** | **string[]** | Collection of network codes to be present in the &#x60;LIST&#x60; session. | [optional] 
**challenge_indicator** | **string** | Indicates whether a challenge is requested for this transaction. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


