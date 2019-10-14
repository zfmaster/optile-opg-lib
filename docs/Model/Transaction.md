# Transaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration** | **string** | Defines what integration scenario this payment session is initialized for, default is &#x60;DISPLAY_NATIVE&#x60;. Selected scenario has an impact on operation URLs within response, they will be adjusted for selected integration scenario.  Possible integration types:   * &#x60;DISPLAY_NATIVE&#x60; (legacy name &#x60;NATIVE_WITHOUT_PCI&#x60;) - integration scenario where payment requests are sent from customer     browser directly to optile web service, but the logic to do so is implemented and/or rendered by merchant web-site.     Merchant has to be PCI DSS (**SAQ A-EP**) compliant to process payments with Credit/Debit Cards.   * &#x60;PURE_NATIVE&#x60; (legacy name &#x60;NATIVE_WITH_PCI&#x60;) - full native integration scenario where all requests (including payments)     are sent from merchant backend server. Merchant has to be PCI DSS (**SAQ D** - highest level of compliance) compliant to     process payments with Credit/Debit Cards.   * &#x60;HOSTED&#x60; - integration scenario where payment requests are sent from page rendered by optile server either direct in     browser or inside the IFrame of merchants web-site. Merchant has to be PCI DSS (**SAQ A** - lowest level of compliance)     compliant to process payments with Credit/Debit Cards.   * &#x60;SELECTIVE_NATIVE&#x60; - integration scenario where payment requests are sent from customer browser directly to optile web     service, but the logic to do so is implemented and/or rendered by merchant web-site for all methods except Credit/Debit     Cards. Credit/Debit Cards payments are rendered within IFrame served from optile server. Merchant has to be PCI DSS     (**SAQ A** - lowest level of compliance) compliant to process payments with Credit/Debit Cards.  See [Integration Scenarios](https://www.optile.io/opg#284716) chapter for detailed comparison of different integration types with optile payment service. | [optional] 
**transaction_id** | **string** | Identifier for this transaction given by the merchant. It is not validated for uniqueness by OPG, but may be checked for by some PSPs, thus recommended to be unique. | 
**country** | **string** | Country where the payment is originating. This influences the choice of the available payment networks. Value format is according to ISO 3166-1 (alpha-2), e.g. \&quot;DE\&quot;, \&quot;FR\&quot;, \&quot;US\&quot;, \&quot;GB\&quot;, etc. | 
**channel** | **string** | Indicates where the payment request comes from. For example, from a website, from a mobile device, or it is a recurring transaction from the merchant&#39;s backend.  By default &#x60;WEB_ORDER&#x60; for this type of transactions. | [optional] 
**division** | **string** | Division name of this transaction.  Merchant can configure multiple divisions via Merchant Configuration API or portal. But there is always one _default division_ that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options. | [optional] 
**callback** | [**\Optile\Model\Callback**](Callback.md) |  | 
**customer** | [**\Optile\Model\Customer**](Customer.md) |  | 
**customer_score** | **int** | Customer score value in range 0...1000. This value will be used by the system for the decision that some security checks should be enforced or disabled (like 3D Security check). | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) |  | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) |  | 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. | [optional] 
**update_only** | **bool** | Indicates that this &#x60;LIST&#x60; transaction is initiated to update existing or register accounts of the of customer. No payment will take place in scope of this &#x60;LIST&#x60; session. | [optional] 
**allow_delete** | **bool** | Indicates that deletion of registered accounts is allowed in scope of this &#x60;LIST&#x60; session:   * If set to &#x60;true&#x60; the deletion accounts is explicitly permitted by merchant.   * If set to &#x60;false&#x60; the deletion accounts is explicitly disallowed by merchant.   * If nothing is set the default behavior applies: deletion is only allowed for &#x60;LIST&#x60;s in the &#x60;updateOnly&#x60; mode. | [optional] 
**preset_first** | **bool** | Indicates that this &#x60;LIST&#x60; transaction is initiated with &#39;preset&#39; option. When selected by customer network and provided account are saved in the system until this &#x60;LIST&#x60; session will be closed by additional &#x60;CHARGE&#x60; request. Callback must specify &#39;summaryUrl&#39; for this type of &#x60;LIST&#x60; transaction. | [optional] 
**style** | [**\Optile\Model\Style**](Style.md) |  | [optional] 
**preselection** | [**\Optile\Model\Preselection**](Preselection.md) |  | [optional] 
**extra_elements** | [**\Optile\Model\ExtraElements**](ExtraElements.md) |  | [optional] 
**mandate** | [**\Optile\Model\Mandate**](Mandate.md) |  | [optional] 
**installment** | [**\Optile\Model\Installment**](Installment.md) |  | [optional] 
**checkout_configuration_name** | **string** | The name of the pre-selected checkout configuration. | [optional] 
**risk_data** | [**\Optile\Model\RiskData**](RiskData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


