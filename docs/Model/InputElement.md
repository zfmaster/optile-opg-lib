# InputElement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the parameter represented by this input element. | 
**type** | **string** | Input type / restrictions that can and should be enforced by the client for this input element:   * &#x60;string&#x60; - one line of text without special restrictions   * &#x60;numeric&#x60; - numbers 0-9 and the delimiters space and dash (&#39;-&#39;) are allowed   * &#x60;integer&#x60; - numbers 0-9 only   * &#x60;select&#x60; - a list of possible values given in an additional options attribute   * &#x60;checkbox&#x60; - checkbox type, what allows &#x60;true&#x60; for set and &#x60;null&#x60; (or &#x60;false&#x60;) for non-set values | 
**label** | **string** | Localized, human readable label that should be displayed for this input field. | 
**options** | [**\Optile\Model\SelectOption[]**](SelectOption.md) | Array of possible options for element of the &#x60;select&#x60; type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


