# Activation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\ActivationLinks**](ActivationLinks.md) |  | 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time this &#x60;ACTIVATION&#x60; was initiated at. | 
**operation** | **string** | Type of this operation. | 
**result_code** | **string** | Result code of this &#x60;ACTIVATION&#x60; that reflects current state. See list of all [Result Codes](https://www.optile.io/opg#294007). | 
**result_info** | **string** | Descriptive information that complements the result code and interaction advice. | 
**return_code** | [**\Optile\Model\ReturnCode**](ReturnCode.md) |  | 
**status** | [**\Optile\Model\Status**](Status.md) | Current status of this &#x60;ACTIVATION&#x60;. See list of all [Status Codes](https://www.optile.io/opg#285186). | 
**interaction** | [**\Optile\Model\Interaction**](Interaction.md) | Interaction advice for this &#x60;ACTIVATION&#x60; according to its current state. | 
**identification** | [**\Optile\Model\Identification**](Identification.md) |  | 
**activated** | [**\Optile\Model\ApplicableNetwork**](ApplicableNetwork.md) | Information about applicable network that is activated within this &#x60;ACTIVATION&#x60; operation. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


