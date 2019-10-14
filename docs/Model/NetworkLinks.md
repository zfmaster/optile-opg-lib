# NetworkLinks

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**self** | **string** | URL to retrieve details about this payment network in context of initialized &#x60;LIST&#x60;. | 
**operation** | **string** | URL where operation data should be submitted (POSTed), if customer has decided to pay with this payment network. | [optional] 
**validation** | **string** | URL to submit account for in-page validation if supported. | [optional] 
**logo** | **string** | URL of this payment network logo (image). | 
**form** | **string** | URL to retrieve an account form template. template is an HTML snippet with account elements and message placeholders. | [optional] 
**localized_form** | **string** | URL to retrieve localized representation of account form. Text placeholders are replaced by text in corresponding language, language is defined by &#x60;LIST&#x60; session. | [optional] 
**preload_form** | **string** | If present, this URL points to the form for this payment network that has to be preloaded and initialised prior the rendering of this &#x60;LIST&#x60; session on the client side. Main goal is to accelerate rendering of the main form for this payment network. | [optional] 
**lang** | **string** | URL of language file that contains labels and messages to localize account forms and display errors for this payment network. Language file is provided in [Java properties](http://en.wikipedia.org/wiki/.properties) format. | 
**i_frame** | **string** | URL of iFrame what should been shown to the customer to collect account data. Present only in the case when &#x60;LIST&#x60; session was initialized with &#x60;SELECTIVE_NATIVE&#x60; integration type. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


