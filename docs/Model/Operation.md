# Operation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | Merchant transaction ID assigned to this operation (payment step).  Note: This value is optional and if it is not set the &#x60;transactionId&#x60; from referred operation (e.g. &#x60;LIST&#x60;) will be used during processing. | [optional] 
**auto_registration** | **bool** | If set to &#x60;true&#x60; the account will be registered for further payments. | [optional] 
**allow_recurrence** | **bool** | If set to &#x60;true&#x60; the account will be registered for further recurring payments. | [optional] 
**account** | [**\Optile\Model\AccountInputData**](AccountInputData.md) |  | [optional] 
**encrypted_account** | **string** | Customer account data encrypted with one of the CSE (Client Side Encryption) keys configured in MCAPI for division of this transaction. Account data should be encrypted according to [JOSE standard](https://tools.ietf.org/html/rfc7520) \&quot;RSA-OAEP\&quot; + \&quot;A256GCM\&quot;, see [RFC-7520](https://tools.ietf.org/html/rfc7520#section-5.2).  Note that supplying both fields &#x60;account&#x60; and  &#x60;encryptedAccount&#x60; will cause an error and such operation will be rejected.  See [Client Side Encryption](https://www.optile.io/opg#894746) for further details. | [optional] 
**client_info** | [**\Optile\Model\ClientInfo**](ClientInfo.md) | Information about customers client (web browser, mobile device, etc.). If defined this will override information provided during &#x60;LIST&#x60; initialization. | [optional] 
**payment** | [**\Optile\Model\Payment**](Payment.md) | Payment information. If defined this will override information provided during &#x60;LIST&#x60; initialization. | [optional] 
**products** | [**\Optile\Model\Product[]**](Product.md) | Products (shopping cart) information. If defined this will override information provided during &#x60;LIST&#x60; initialization. | [optional] 
**checkboxes** | **map[string,bool]** | Map of selected checkboxes. Name reflects the checkbox distinguish name, value reflects its state - &#x60;true&#x60; for checked, &#x60;false&#x60; for unchecked. | [optional] 
**mandate** | [**\Optile\Model\Mandate**](Mandate.md) |  | [optional] 
**installment** | [**\Optile\Model\Installment**](Installment.md) |  | [optional] 
**routes** | [**\Optile\Model\Route[]**](Route.md) | List of payment routes for this operation. Reflects the merchant decision to override the routing proposed by system in &#x60;LIST&#x60;. Routes are sorted in the preferred order.  Note: this list may only contain routes that were available in the referred &#x60;LIST&#x60; for selected payment network or account. | [optional] 
**final_operation** | **bool** | Indicates that this is a final operation of this kind: final capture, update or refund and no future actions are expected. | [optional] 
**provider_request** | [**\Optile\Model\ProviderParameters**](ProviderParameters.md) | Provider request parameters that should be passed to the target payment provider adapter to complete the operation. | [optional] 
**preselection** | [**\Optile\Model\OperationPreselection**](OperationPreselection.md) |  | [optional] 
**risk_data** | [**\Optile\Model\RiskData**](RiskData.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


