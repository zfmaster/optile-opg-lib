# Optile\ActivationApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePaymentNetwork**](ActivationApi.md#activatePaymentNetwork) | **POST** /lists/{listId}/{network}/activate | Activate selected payment network
[**getActivatedPaymentNetwork**](ActivationApi.md#getActivatedPaymentNetwork) | **GET** /activations/{activationId} | Get ACTIVATION details


# **activatePaymentNetwork**
> \Optile\Model\Activation activatePaymentNetwork($list_id, $network, $operation, $view)

Activate selected payment network

Initiates `ACTIVATION` operation in scope of `LIST` session with selected payment network and collected account-input-data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete an `ACTIVATION` operation
$network = "network_example"; // string | The code of selected payment network
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `ACTIVATION` operation with selected payment network
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->activatePaymentNetwork($list_id, $network, $operation, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivationApi->activatePaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete an &#x60;ACTIVATION&#x60; operation |
 **network** | **string**| The code of selected payment network |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;ACTIVATION&#x60; operation with selected payment network |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\Activation**](../Model/Activation.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivatedPaymentNetwork**
> \Optile\Model\Activation getActivatedPaymentNetwork($activation_id, $view)

Get ACTIVATION details

Retrieves current state of an `ACTIVATION` process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ActivationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activation_id = "activation_id_example"; // string | The `longId` of an `ACTIVATION` to retrieve
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->getActivatedPaymentNetwork($activation_id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivationApi->getActivatedPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activation_id** | **string**| The &#x60;longId&#x60; of an &#x60;ACTIVATION&#x60; to retrieve |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\Activation**](../Model/Activation.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

