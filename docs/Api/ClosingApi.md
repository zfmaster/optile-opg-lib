# Optile\ClosingApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**closeCharge**](ClosingApi.md#closeCharge) | **POST** /charges/{chargeId}/closing | Close deferred CHARGE
[**closePayout**](ClosingApi.md#closePayout) | **POST** /payouts/{payoutId}/closing | Close deferred PAYOUT


# **closeCharge**
> \Optile\Model\Charge closeCharge($charge_id, $operation)

Close deferred CHARGE

Initiates `CLOSING` operation of deferred `CHARGE`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ClosingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The `longId` of a deferred `CHARGE` operation to close
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `CLOSING` operation

try {
    $result = $apiInstance->closeCharge($charge_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClosingApi->closeCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The &#x60;longId&#x60; of a deferred &#x60;CHARGE&#x60; operation to close |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;CLOSING&#x60; operation |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **closePayout**
> \Optile\Model\Charge closePayout($payout_id, $operation)

Close deferred PAYOUT

Initiates `CLOSING` operation of deferred `PAYOUT`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ClosingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payout_id = "payout_id_example"; // string | The `longId` of a deferred `PAYOUT` operation to close
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `CLOSING` operation

try {
    $result = $apiInstance->closePayout($payout_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClosingApi->closePayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_id** | **string**| The &#x60;longId&#x60; of a deferred &#x60;PAYOUT&#x60; operation to close |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;CLOSING&#x60; operation |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

