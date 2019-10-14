# Callback

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**return_url** | **string** | URL of landing page in merchants shop system for successful payment. Customer will be redirected to this URL after successful payment. | 
**summary_url** | **string** | URL of landing page in merchants shop system after customer select payment method. This property is mandatory for the &#x60;LIST&#x60; session with &#x60;presetFirst&#x60; option. | [optional] 
**cancel_url** | **string** | URL of landing page in merchants shop system for cancelled or failed payment. Customer will be redirected to this URL after canceled or permanently failed payment. | 
**notification_url** | **string** | Payment status notification URL. If defined, the OPG system will send asynchronous status notifications about this payment to this URL.  Note: merchant can configure a single notification URL for all transactions on the _division_ level via Merchant Configuration API. Notification URL in &#x60;callback&#x60;, however, overrides the division settings. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


