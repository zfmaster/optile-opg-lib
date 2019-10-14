# CustomerAddresses

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping** | [**\Optile\Model\Address**](Address.md) | Payment shipping address. | [optional] 
**billing** | [**\Optile\Model\Address**](Address.md) | Customer billing (payment) address. | [optional] 
**residential** | [**\Optile\Model\Address**](Address.md) | Customer residential address. | [optional] 
**use_billing_as_shipping_address** | **bool** | If set to &#x60;true&#x60; and no _shipping_ address is provided the _billing_ address will be used in place of _shipping_ address. By default &#x60;false&#x60;. | [optional] 
**additional_addresses** | [**\Optile\Model\Address[]**](Address.md) | Collection of additional shipping addresses. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


