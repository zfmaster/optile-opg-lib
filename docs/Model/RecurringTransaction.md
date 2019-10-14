# RecurringTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Identifier for this payment transaction given by the merchant. It is not validated for uniqueness by OPG, but may be checked for by some PSPs, thus recommended to be unique. | 
**country** | **string** | Country where the payment is originating. This influences the choice of the available payment networks. Value format is according to ISO 3166-1 (alpha-2), e.g. \&quot;DE\&quot;, \&quot;FR\&quot;, \&quot;US\&quot;, \&quot;GB\&quot;, etc. | 
**channel** | **string** | Indicates where the payment request comes from. For example, from a website, from a mobile device, or it is a recurring transaction from the merchant&#39;s backend.  By default &#x60;RECURRING&#x60; for this type of transactions. | [optional] 
**division** | **string** | Division name of this transaction.  Merchant can configure multiple divisions via Merchant Configuration API or portal. But there is always one _default division_ that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options. | [optional] 
**callback** | [**\Optile\Model\RecurringCallback**](RecurringCallback.md) |  | [optional] 
**customer** | [**\Optile\Model\Customer**](Customer.md) |  | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) | Information about customers client (web browser, mobile device, etc.)  **Deprecated!** This information is not expected during recurring charge and should not be supplied. | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) |  | 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. | [optional] 
**style** | [**\Optile\Model\Style**](Style.md) | Default appearance of payment page can be overwritten with these style parameters.  **Deprecated!** This information is not expected during recurring charge and will be ignored. | [optional] 
**preselection** | [**\Optile\Model\RecurringPreselection**](RecurringPreselection.md) |  | [optional] 
**mandate** | [**\Optile\Model\Mandate**](Mandate.md) |  | [optional] 
**installment** | [**\Optile\Model\Installment**](Installment.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


