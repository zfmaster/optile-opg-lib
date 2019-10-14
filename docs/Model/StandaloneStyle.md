# StandaloneStyle

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | Preferred language for payment page. If undefined will be decided upon country information from transaction object.  Format &#x60;&lt;language code&gt;[_&lt;COUNTRY CODE&gt;]&#x60;, where &#x60;&lt;language code&gt;&#x60; is a mandatory part that comply with [ISO 639-1 (alpha-2)](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes), and &#x60;&lt;COUNTRY CODE&gt;&#x60; is an optional part that comply with [ISO 3166-1 (alpha-2)](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).  Examples: &#x60;de&#x60; - for German, &#x60;de_CH&#x60; - for Swiss German | [optional] 
**challenge_window_size** | **string** | Challenge Window size the issuer should use to display the challenge. If the input value does not match any of the possible values, a default option specific to payment service provider will be used. Possible values (enumerated in 3DS2 specification):   - fullPage   - 250x400   - 390x400   - 500x600   - 600x400 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


