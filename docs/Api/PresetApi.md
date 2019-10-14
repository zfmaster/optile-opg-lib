# Optile\PresetApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**presetPaymentAccount**](PresetApi.md#presetPaymentAccount) | **POST** /lists/{listId}/accounts/{accountId}/preset | Preset registered account of LIST
[**presetPaymentNetwork**](PresetApi.md#presetPaymentNetwork) | **POST** /lists/{listId}/{network}/preset | Preset payment network of LIST


# **presetPaymentAccount**
> \Optile\Model\Preset presetPaymentAccount($list_id, $account_id, $operation)

Preset registered account of LIST

Initiates `PRESET` operation in scope of `LIST` session with selected registered account.  Note: This is only available for registered customers and works if `LIST` session was initialized with `presetFirst` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PresetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `CHARGE` operation
$account_id = "account_id_example"; // string | The ID of account from registered customer to perform a `PRESET` operation
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `PRESET` operation with selected payment network

try {
    $result = $apiInstance->presetPaymentAccount($list_id, $account_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresetApi->presetPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation |
 **account_id** | **string**| The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;PRESET&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\Preset**](../Model/Preset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **presetPaymentNetwork**
> \Optile\Model\Preset presetPaymentNetwork($list_id, $network, $operation)

Preset payment network of LIST

Initiates `PRESET` operation in scope of `LIST` session with selected payment network and collected account-input-data.  Note: This is only available if `LIST` session was initialized with `presetFirst` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PresetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `PRESET` operation
$network = "network_example"; // string | The code of selected payment network
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `PRESET` operation with selected payment network

try {
    $result = $apiInstance->presetPaymentNetwork($list_id, $network, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PresetApi->presetPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation |
 **network** | **string**| The code of selected payment network |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;PRESET&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\Preset**](../Model/Preset.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

