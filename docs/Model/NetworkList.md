# NetworkList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\ListLinks**](ListLinks.md) |  | 
**timestamp** | [**\DateTime**](\DateTime.md) | Date and time this &#x60;LIST&#x60; session was initialized at. | 
**operation** | **string** | Type of this operation | 
**result_code** | **string** | Result code of this &#x60;LIST&#x60; session. See list of all [Result Codes](https://www.optile.io/opg#294007). | 
**result_info** | **string** | Descriptive information that complements the result code and interaction advice. | 
**return_code** | [**\Optile\Model\ReturnCode**](ReturnCode.md) |  | [optional] 
**status** | [**\Optile\Model\Status**](Status.md) | Current status of this &#x60;LIST&#x60; session. See list of all [Status Codes](https://www.optile.io/opg#285186). | 
**interaction** | [**\Optile\Model\Interaction**](Interaction.md) | Interaction advice for this &#x60;LIST&#x60; session according to its current state. | 
**identification** | [**\Optile\Model\Identification**](Identification.md) |  | 
**accounts** | [**\Optile\Model\AccountRegistration[]**](AccountRegistration.md) | Collection of registered accounts (if available) for recurring customer. | [optional] 
**networks** | [**\Optile\Model\Networks**](Networks.md) |  | [optional] 
**extra_elements** | [**\Optile\Model\ExtraElements**](ExtraElements.md) |  | [optional] 
**redirect** | [**\Optile\Model\Redirect**](Redirect.md) | If present, merchant is advised to redirect customer to corresponding redirect URL. In case of &#x60;HOSTED&#x60; integration scenario this will lead customer to payment page hosted by optile. | [optional] 
**preset_account** | [**\Optile\Model\PresetAccount**](PresetAccount.md) |  | [optional] 
**operation_type** | **string** | Types of operation what could been triggered by &#x60;LIST&#x60; session. | [optional] 
**allow_delete** | **bool** | Indicates that deletion of registered accounts is allowed in scope of this &#x60;LIST&#x60; session:   * If set to &#x60;true&#x60; the deletion accounts is explicitly permitted by merchant.   * If set to &#x60;false&#x60; the deletion accounts is explicitly disallowed by merchant.   * If nothing is set the default behavior applies: deletion is only allowed for &#x60;LIST&#x60;s in the &#x60;updateOnly&#x60; mode. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


