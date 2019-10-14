# ExpressTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration** | **string** | Defines integration scenario of for this &#x60;EXPRESSPRESET&#x60; session. Selected scenario has an impact on operation URL within response, it is adjusted for selected integration scenario.  Default: &#x60;PURE_NATIVE&#x60; | [optional] 
**transaction_id** | **string** | Identifier for this payment transaction given by the merchant. It is not validated for uniqueness by OPG, but may be checked for by some PSPs, thus recommended to be unique. | 
**country** | **string** | Country where the payment is originating. This influences the choice of the available payment networks. Value format is according to ISO 3166-1 (alpha-2), e.g. \&quot;DE\&quot;, \&quot;FR\&quot;, \&quot;US\&quot;, \&quot;GB\&quot;, etc. | 
**division** | **string** | Division name of this transaction.  Merchant can configure multiple divisions via Merchant Configuration API or portal. But there is always one _default division_ that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options. | [optional] 
**callback** | [**\Optile\Model\Callback**](Callback.md) | Callback information about merchants shop system. It is strongly advised to provide this data with every transaction.  Note: for &#x60;EXPRESSPRESET&#x60; operation the &#x60;summaryUrl&#x60; is a mandatory parameter. | 
**customer** | [**\Optile\Model\Customer**](Customer.md) | Information about customer.  Note: for &#x60;EXPRESSPRESET&#x60; operation this information is optional since the details about customer (payer) will be collected from PSP. | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) |  | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) |  | 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. | [optional] 
**style** | [**\Optile\Model\StandaloneStyle**](StandaloneStyle.md) |  | [optional] 
**provider_request** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider request parameters to pass from front-end JavaScript library of dedicated provider to the back-end logic (adapter) during express checkout initialization.  Note: this set of parameters is PSP specific, it may vary in content or can also be &#x60;null&#x60;. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


