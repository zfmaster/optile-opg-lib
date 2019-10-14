# Optile\PayoutApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayout**](PayoutApi.md#getPayout) | **GET** /payouts/{payoutId} | Gets PAYOUT operation details
[**payoutOnCharge**](PayoutApi.md#payoutOnCharge) | **POST** /charges/{chargeId}/payout | Payout of successful CHARGE
[**payoutWithPaymentAccount**](PayoutApi.md#payoutWithPaymentAccount) | **POST** /lists/{listId}/accounts/{accountId}/payout | Payout with selected registered account
[**payoutWithPaymentNetwork**](PayoutApi.md#payoutWithPaymentNetwork) | **POST** /lists/{listId}/{network}/payout | Payout with selected network


# **getPayout**
> \Optile\Model\Payout getPayout($payout_id)

Gets PAYOUT operation details

Retrieves current state of a `PAYOUT` operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payout_id = "payout_id_example"; // string | The `longId` of a `PAYOUT` operation to retrieve

try {
    $result = $apiInstance->getPayout($payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payout_id** | **string**| The &#x60;longId&#x60; of a &#x60;PAYOUT&#x60; operation to retrieve |

### Return type

[**\Optile\Model\Payout**](../Model/Payout.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutOnCharge**
> \Optile\Model\Payout payoutOnCharge($charge_id, $operation)

Payout of successful CHARGE

Initiates `PAYOUT` operation of successful `CHARGE`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The `longId` of a successful `CHARGE` or `CLOSING` operation to payout (to refund)
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `PAYOUT` operation

try {
    $result = $apiInstance->payoutOnCharge($charge_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->payoutOnCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The &#x60;longId&#x60; of a successful &#x60;CHARGE&#x60; or &#x60;CLOSING&#x60; operation to payout (to refund) |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;PAYOUT&#x60; operation |

### Return type

[**\Optile\Model\Payout**](../Model/Payout.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutWithPaymentAccount**
> \Optile\Model\Payout payoutWithPaymentAccount($list_id, $account_id, $operation)

Payout with selected registered account

Initiates `PAYOUT` operation in scope of `LIST` session with selected registered account.  Note: This is only available for registered customers and works if `LIST` was initialized for `PAYOUT`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `PAYOUT` operation
$account_id = "account_id_example"; // string | The ID of account from registered customer to perform a `PAYOUT` operation
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `PAYOUT` operation with selected payment network

try {
    $result = $apiInstance->payoutWithPaymentAccount($list_id, $account_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->payoutWithPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PAYOUT&#x60; operation |
 **account_id** | **string**| The ID of account from registered customer to perform a &#x60;PAYOUT&#x60; operation |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;PAYOUT&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\Payout**](../Model/Payout.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payoutWithPaymentNetwork**
> \Optile\Model\Payout payoutWithPaymentNetwork($list_id, $network, $operation)

Payout with selected network

Initiates `PAYOUT` operation in scope of `LIST` session with selected payment network.  Note: This only works if `LIST` session was initialized for `PAYOUT`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `PAYOUT` operation
$network = "network_example"; // string | The code of selected payment network
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `PAYOUT` operation with selected payment network

try {
    $result = $apiInstance->payoutWithPaymentNetwork($list_id, $network, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->payoutWithPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PAYOUT&#x60; operation |
 **network** | **string**| The code of selected payment network |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;PAYOUT&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\Payout**](../Model/Payout.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

