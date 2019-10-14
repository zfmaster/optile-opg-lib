# Style

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**language** | **string** | Preferred language for payment page. If undefined will be decided upon country information from transaction object.  Format &#x60;&lt;language code&gt;[_&lt;COUNTRY CODE&gt;]&#x60;, where &#x60;&lt;language code&gt;&#x60; is a mandatory part that comply with [ISO 639-1 (alpha-2)](https://en.wikipedia.org/wiki/List_of_ISO_639-1_codes), and &#x60;&lt;COUNTRY CODE&gt;&#x60; is an optional part that comply with [ISO 3166-1 (alpha-2)](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2).  Examples: &#x60;de&#x60; - for German, &#x60;de_CH&#x60; - for Swiss German | [optional] 
**theme** | **string** | The theme code for hosted payment page. For example, \&quot;light\&quot;, \&quot;dark\&quot;, \&quot;highcontrast\&quot;, etc.  **Deprecated!** This property is not supported in OPG II and will be ignored. Use &#x60;cssOverride&#x60; to change style and appearance of hosted payment page. | [optional] 
**css_override** | **string** | URL of merchant custom CSS for payment page. It can be hosted anywhere but must be accessible through \&quot;https\&quot; protocol. | [optional] 
**client** | **string** | Defines the type of customer client. By default &#x60;AUTO&#x60;.  It has an impact on payment page style and only considered during &#x60;HOSTED&#x60; integration type. If set to &#x60;RESPONSIVE&#x60; customer will face a new version of hosted payment page with networks logo links pointing to high resolution images. Also see &#x60;resolution&#x60; and &#x60;hostedVersion&#x60; properties. | [optional] 
**resolution** | **string** | Allows to define resolution of networks logo images. Currently supported values &#x60;1x&#x60; - for _old_ images where the height is 32px, and &#x60;2x&#x60; - for high resolution logos with double height (64px). | [optional] 
**hosted_version** | **string** | Version of hosted payment page that merchant would prefer to render the &#x60;LIST&#x60; session with when using &#x60;HOSTED&#x60; integration type. If specified this field overrides value specified in property &#x60;client&#x60; and refers to the responsive hosted payment pages of explicit version. If this field is not specified and &#x60;client&#x60; is set to &#x60;RESPONSIVE&#x60; then &#x60;v2&#x60; is used by default.  Examples: &#x60;v2&#x60;, &#x60;v3&#x60;, &#x60;v3.1&#x60;, etc. | [optional] 
**challenge_window_size** | **string** | Challenge Window size the issuer should use to display the challenge. If the input value does not match any of the possible values, a default option specific to payment service provider will be used. Possible values (enumerated in 3DS2 specification):   - fullPage   - 250x400   - 390x400   - 500x600   - 600x400 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


