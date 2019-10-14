# PresetAccount

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\PresetLinks**](PresetLinks.md) |  | 
**code** | **string** | The code of preset payment network. | 
**masked_account** | [**\Optile\Model\AccountMask**](AccountMask.md) |  | [optional] 
**empty_form** | **bool** | Indicates that form for this account is empty, without any text and input elements. | 
**button** | **string** | Code of button-label for this preset account. | 
**redirect** | [**\Optile\Model\Redirect**](Redirect.md) | Describes redirect to summary page of merchants web-site. | 
**contract_data** | **map[string,string]** | Map of public contract attributes (settings that are designed to be exposed, e.g. &#x60;button_color&#x60;) from the first possible route. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


