# Optile\ExpressApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**confirmExpressPreset**](ExpressApi.md#confirmExpressPreset) | **POST** /presets/{presetId}/confirm | Confirm express preset session
[**createExpressPreset**](ExpressApi.md#createExpressPreset) | **POST** /express/{network}/preset | Create express preset session
[**getExpressList**](ExpressApi.md#getExpressList) | **GET** /express | Get express checkout networks
[**getExpressPreset**](ExpressApi.md#getExpressPreset) | **GET** /presets/{presetId} | Get express preset details
[**updateExpressPreset**](ExpressApi.md#updateExpressPreset) | **PUT** /presets/{presetId} | Update express preset session


# **confirmExpressPreset**
> \Optile\Model\ExpressPreset confirmExpressPreset($preset_id, $preset_update)

Confirm express preset session

Performs final update and confirmation of open `EXPRESSPRESET` session. This action is passed to the PSP with final payment and transaction details that merchant and customer agreed upon.  Note: empty content is interpreted as no changes to the current express preset state and customer has accepted and confirmed that.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = "preset_id_example"; // string | The `longId` of an `EXPRESSPRESET` session to confirm
$preset_update = new \Optile\Model\ExpressPresetUpdate(); // \Optile\Model\ExpressPresetUpdate | Express preset update and confirmation details

try {
    $result = $apiInstance->confirmExpressPreset($preset_id, $preset_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->confirmExpressPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preset_id** | **string**| The &#x60;longId&#x60; of an &#x60;EXPRESSPRESET&#x60; session to confirm |
 **preset_update** | [**\Optile\Model\ExpressPresetUpdate**](../Model/ExpressPresetUpdate.md)| Express preset update and confirmation details |

### Return type

[**\Optile\Model\ExpressPreset**](../Model/ExpressPreset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExpressPreset**
> \Optile\Model\ExpressPreset createExpressPreset($network, $transaction)

Create express preset session

Initializes an express preset payment session with selected payment network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network = "network_example"; // string | The code of selected payment network
$transaction = new \Optile\Model\ExpressTransaction(); // \Optile\Model\ExpressTransaction | Express preset transaction details

try {
    $result = $apiInstance->createExpressPreset($network, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->createExpressPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network** | **string**| The code of selected payment network |
 **transaction** | [**\Optile\Model\ExpressTransaction**](../Model/ExpressTransaction.md)| Express preset transaction details |

### Return type

[**\Optile\Model\ExpressPreset**](../Model/ExpressPreset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpressList**
> \Optile\Model\ExpressList getExpressList($country, $division, $integration)

Get express checkout networks

Retrieves details about available payment networks that can be offered to a customer during express checkout flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | Country code of the payment in ISO 3166-1 (alpha-2) format, e.g \"DE\", \"FR\", \"US\", \"GB\", etc.
$division = "division_example"; // string | Merchant division of the payment. There is always one default division that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options.
$integration = "integration_example"; // string | Defines integration scenario of the payment, default is `DISPLAY_NATIVE`. Selected scenario has an impact on operation URLs within response, they will be adjusted for selected integration scenario.

try {
    $result = $apiInstance->getExpressList($country, $division, $integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getExpressList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| Country code of the payment in ISO 3166-1 (alpha-2) format, e.g \&quot;DE\&quot;, \&quot;FR\&quot;, \&quot;US\&quot;, \&quot;GB\&quot;, etc. |
 **division** | **string**| Merchant division of the payment. There is always one default division that will be used if this property is undefined. Different divisions can be configured with different setup, contracts, payment routes and network options. | [optional]
 **integration** | **string**| Defines integration scenario of the payment, default is &#x60;DISPLAY_NATIVE&#x60;. Selected scenario has an impact on operation URLs within response, they will be adjusted for selected integration scenario. | [optional]

### Return type

[**\Optile\Model\ExpressList**](../Model/ExpressList.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExpressPreset**
> \Optile\Model\ExpressPreset getExpressPreset($preset_id)

Get express preset details

Retrieves current state of `EXPRESSPRESET` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = "preset_id_example"; // string | The `longId` of an `EXPRESSPRESET` session to retrieve

try {
    $result = $apiInstance->getExpressPreset($preset_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->getExpressPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preset_id** | **string**| The &#x60;longId&#x60; of an &#x60;EXPRESSPRESET&#x60; session to retrieve |

### Return type

[**\Optile\Model\ExpressPreset**](../Model/ExpressPreset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExpressPreset**
> \Optile\Model\ExpressPreset updateExpressPreset($preset_id, $preset_update)

Update express preset session

Performs intermediate update of open `EXPRESSPRESET` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ExpressApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = "preset_id_example"; // string | The `longId` of an `EXPRESSPRESET` session to update
$preset_update = new \Optile\Model\ExpressPresetUpdate(); // \Optile\Model\ExpressPresetUpdate | Express preset update details

try {
    $result = $apiInstance->updateExpressPreset($preset_id, $preset_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExpressApi->updateExpressPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preset_id** | **string**| The &#x60;longId&#x60; of an &#x60;EXPRESSPRESET&#x60; session to update |
 **preset_update** | [**\Optile\Model\ExpressPresetUpdate**](../Model/ExpressPresetUpdate.md)| Express preset update details |

### Return type

[**\Optile\Model\ExpressPreset**](../Model/ExpressPreset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

