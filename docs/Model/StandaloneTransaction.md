# StandaloneTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Identifier for this payment transaction given by the merchant. It is not validated for uniqueness by OPG, but may be checked for by some PSPs, thus recommended to be unique. | 
**country** | **string** | Country where the payment is originating. This influences the choice of the available payment networks. Value format is according to ISO 3166-1 (alpha-2), e.g. \&quot;DE\&quot;, \&quot;FR\&quot;, \&quot;US\&quot;, \&quot;GB\&quot;, etc. | 
**channel** | **string** | Indicates where the payment request comes from. For example, from a website, from a mobile device, or it is a recurring transaction from the merchant&#39;s backend.  By default &#x60;WEB_ORDER&#x60; for this type of transactions. | [optional] 
**division** | **string** | Division name of this transaction.  Merchant can configure multiple divisions via Merchant Configuration API or portal. But there is always one _default division_ that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options. | [optional] 
**callback** | [**\Optile\Model\Callback**](Callback.md) |  | 
**customer** | [**\Optile\Model\Customer**](Customer.md) |  | 
**customer_score** | **int** | Customer score value in range 0...1000. This value will be used by the system for the decision that some security checks should be enforced or disabled (like 3D Security check). | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) |  | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) |  | 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. | [optional] 
**style** | [**\Optile\Model\StandaloneStyle**](StandaloneStyle.md) |  | [optional] 
**preselection** | [**\Optile\Model\StandalonePreselection**](StandalonePreselection.md) |  | 
**mandate** | [**\Optile\Model\Mandate**](Mandate.md) |  | [optional] 
**installment** | [**\Optile\Model\Installment**](Installment.md) |  | [optional] 
**auto_registration** | **bool** | If set to &#x60;true&#x60; the account will be registered for further payments. | [optional] 
**allow_recurrence** | **bool** | If set to &#x60;true&#x60; the account will be registered for further recurring payments. | [optional] 
**account** | [**\Optile\Model\AccountInputData**](AccountInputData.md) |  | [optional] 
**encrypted_account** | **string** | Customer account data encrypted with one of the CSE (Client Side Encryption) keys configured in MCAPI for division of this transaction. Account data should be encrypted according to [JOSE standard](https://tools.ietf.org/html/rfc7520) \&quot;RSA-OAEP\&quot; + \&quot;A256GCM\&quot;, see [RFC-7520](https://tools.ietf.org/html/rfc7520#section-5.2).  Note that supplying both fields &#x60;account&#x60; and  &#x60;encryptedAccount&#x60; will cause an error and such operation will be rejected.  See [Client Side Encryption](https://www.optile.io/opg#894746) for further details. | [optional] 
**checkboxes** | **map[string,bool]** | Map of selected checkboxes; name reflects the checkbox distinguish name, value reflects its state - &#x60;true&#x60; for selected, &#x60;false&#x60; for unchecked | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


