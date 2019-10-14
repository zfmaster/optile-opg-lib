# AccountRegistration

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**links** | [**\Optile\Model\AccountLinks**](AccountLinks.md) |  | 
**id** | **string** | The ID of this registered account. | [optional] 
**code** | **string** | Payment network code of the registration. | 
**label** | **string** | Display label of the payment network for this registration. | 
**masked_account** | [**\Optile\Model\AccountMask**](AccountMask.md) |  | 
**registration** | **bool** | Indicates that this account has at least one active one-click payment service provider registration. | [optional] 
**recurrence** | **bool** | Indicates that this account has at least one active registration payment service provider registration. | [optional] 
**last_successful_charge_at** | [**\DateTime**](\DateTime.md) | Time stamp of last successful &#x60;CHARGE&#x60; operation performed with this account. | [optional] 
**selected** | **bool** | Indicates that this account registration is initially selected. | [optional] 
**i_frame_height** | **int** | IFrame height for selective native, only supplied if \&quot;iFrame\&quot; link is present. | [optional] 
**preferred_at** | [**\DateTime**](\DateTime.md) | Timestamp when this account was marked as preferred. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Timestamp when this account was created. | [optional] 
**empty_form** | **bool** | Indicates that form for this account is empty, without any text and input elements. | [optional] 
**localized_input_elements** | [**\Optile\Model\InputElement[]**](InputElement.md) | Collection of form input elements. This information is only exposed if merchant indicated &#x60;jsonForms&#x60; option in the &#x60;view&#x60; query parameter. | [optional] 
**routing** | [**\Optile\Model\Routing**](Routing.md) |  | [optional] 
**contract_data** | **map[string,string]** | Map of public contract attributes (settings that are designed to be exposed, e.g. &#x60;button_color&#x60;) from the first possible route. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


