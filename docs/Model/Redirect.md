# Redirect

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL to redirect customer&#39;s browser (or any other client) to. | 
**method** | **string** | Advised HTTP method to use for the redirection. | 
**parameters** | [**\Optile\Model\Parameter[]**](Parameter.md) | Collection of additional parameters to pass with this redirection. | [optional] 
**suppress_i_frame** | **bool** | If &#x60;true&#x60; redirect logic should ensure that IFrame is suppressed during redirection, if payment page or web-site resides inside one. | [optional] 
**display_in_popup** | **bool** | If &#x60;true&#x60; this redirect has to be displayed in a pop-up window as a requirement from PSP. | [optional] 
**type** | **string** | Describes the type of this redirect.  Possible values are:   * &#x60;SUMMARY&#x60; - redirect points to the session&#39;s &#x60;summaryUrl&#x60; from transaction &#x60;callback&#x60;.   * &#x60;RETURN&#x60; - redirect points to the session&#39;s &#x60;returnUrl&#x60; from transaction &#x60;callback&#x60;.   * &#x60;CANCEL&#x60; - redirect points to the session&#39;s &#x60;cancelUrl&#x60; from transaction &#x60;callback&#x60;.   * &#x60;PROVIDER&#x60; - redirect to the external page of a provider (redirect method such as PayPal, Sofort, iDeal, etc.)     or 3D Secure pages in case of credit/debit card processing.  Note: new types of redirect may appear in the future for new payment use cases. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


