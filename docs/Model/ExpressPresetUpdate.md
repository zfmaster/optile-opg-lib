# ExpressPresetUpdate

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**callback** | [**\Optile\Model\Callback**](Callback.md) | Updated callback information. If missing, the callback details require no update and original callback information passed during &#x60;EXPRESSPRESET&#x60; initialization stays intact. | [optional] 
**customer** | [**\Optile\Model\Customer**](Customer.md) | Updated information about customer. If missing, the customer details require no update and original information passed during &#x60;EXPRESSPRESET&#x60; initialization stays intact. | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) | Updated information about customers client (web browser, mobile device, etc.) | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) | Updated payment information. If missing, the payment details require no update and original information passed during &#x60;EXPRESSPRESET&#x60; initialization stays intact. | [optional] 
**products** | [**\Optile\Model\Product[]**](Product.md) | Updated products (shopping cart) information. If missing, the product details require no update and original information passed during &#x60;EXPRESSPRESET&#x60; initialization stays intact. | [optional] 
**provider_request** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider request parameters to pass from front-end JavaScript library of dedicated provider to the back-end logic (adapter) during express checkout update or activation.  Note: this set of parameters is PSP specific, it may vary in content or can also be &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


