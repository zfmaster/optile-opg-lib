# ClientInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ip** | **string** | The customer&#39;s IP v4 address, e.g. \&quot;67.23.211.9\&quot;. This can be used by advanced risk management. | [optional] 
**ipv6** | **string** | The customer&#39;s IP v6 address, e.g. \&quot;2001:0db8:85a3:08d3:1319:8a2e:0370:7344\&quot;. This can be used by advanced risk management. | [optional] 
**user_agent** | **string** | The userAgent header string as provided by the customer&#39;s client, e.g. browser. This can be used for payment network selection or by hosted payment pages from optile or PSP to improve user experience during checkout. | [optional] 
**accept_header** | **string** | The accept header string as provided by the customer&#39;s client, e.g. browser. | [optional] 
**cookie_id** | **string** | Tracking cookie ID. Can be used by merchant to track or refer customer web clients. | [optional] 
**device_id** | **string** | Unique device ID of a smartphone, i.e. this ID is called by Apple \&quot;UUID\&quot; and by Google \&quot;Android ID\&quot;. | [optional] 
**headers** | [**\Optile\Model\Parameter[]**](Parameter.md) | An array of additional client specific headers like &#39;Referer&#39;. You can also provide here &#39;User-Agent&#39; or &#39;Accept&#39; headers and do not provide them as dedicated properties. | [optional] 
**java_enabled** | **bool** | The ability of the cardholder browser to execute Java. Value is returned from the navigator.javaEnabled property. | [optional] 
**language** | **string** | Represents the browser language as defined in IETF BCP47. The value is limited to 1-8 characters. Value is returned from navigator.language property. | [optional] 
**color_depth** | **int** | Representing the bit depth of the color palette for displaying images, in bits per pixel. Obtained from cardholder browser using the screen.colorDepth property. | [optional] 
**timezone** | **string** | Timezone | [optional] 
**browser_screen_width** | **int** | Cardholder&#39;s browser window width in pixels. See [w3schools example](https://www.w3schools.com/jsref/prop_win_innerheight.asp) how to get it. | [optional] 
**browser_screen_height** | **int** | Cardholder&#39;s browser window height in pixels. See [w3schools example](https://www.w3schools.com/jsref/prop_win_innerheight.asp) how to get it. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


