# Optile\ChargeApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelCharge**](ChargeApi.md#cancelCharge) | **DELETE** /charges/{chargeId} | Cancel deferred CHARGE
[**getCharge**](ChargeApi.md#getCharge) | **GET** /charges/{chargeId} | Get CHARGE operation details
[**payWithCustomerPaymentAccount**](ChargeApi.md#payWithCustomerPaymentAccount) | **POST** /customers/{customerId}/charge | Recurring CHARGE of registered customer
[**payWithExpressPreset**](ChargeApi.md#payWithExpressPreset) | **POST** /presets/{presetId}/charge | Pay with confirmed express preset
[**payWithPaymentAccount**](ChargeApi.md#payWithPaymentAccount) | **POST** /lists/{listId}/accounts/{accountId}/charge | Pay with selected registered account
[**payWithPaymentNetwork**](ChargeApi.md#payWithPaymentNetwork) | **POST** /lists/{listId}/{network}/charge | Pay with selected payment network
[**payWithSelectedPaymentNetwork**](ChargeApi.md#payWithSelectedPaymentNetwork) | **POST** /lists/{listId}/charge | Pay with preset network or account
[**standalonePayment**](ChargeApi.md#standalonePayment) | **POST** /charges | Stand-alone payment with selected payment network


# **cancelCharge**
> cancelCharge($charge_id)

Cancel deferred CHARGE

Requests cancelation of a deferred `CHARGE` operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The `longId` of a deferred `CHARGE` operation to cancel

try {
    $apiInstance->cancelCharge($charge_id);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->cancelCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The &#x60;longId&#x60; of a deferred &#x60;CHARGE&#x60; operation to cancel |

### Return type

void (empty response body)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCharge**
> \Optile\Model\Charge getCharge($charge_id)

Get CHARGE operation details

Retrieves current state of a `CHARGE` operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$charge_id = "charge_id_example"; // string | The `longId` of a `CHARGE` operation to retrieve

try {
    $result = $apiInstance->getCharge($charge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->getCharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_id** | **string**| The &#x60;longId&#x60; of a &#x60;CHARGE&#x60; operation to retrieve |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payWithCustomerPaymentAccount**
> \Optile\Model\Charge payWithCustomerPaymentAccount($customer_id, $transaction)

Recurring CHARGE of registered customer

Initiates recurring `CHARGE` operation of customer registered at OPG.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The ID of a customer registered at optile
$transaction = new \Optile\Model\RecurringTransaction(); // \Optile\Model\RecurringTransaction | Holds transaction information for recurring `CHARGE` operation

try {
    $result = $apiInstance->payWithCustomerPaymentAccount($customer_id, $transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->payWithCustomerPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of a customer registered at optile |
 **transaction** | [**\Optile\Model\RecurringTransaction**](../Model/RecurringTransaction.md)| Holds transaction information for recurring &#x60;CHARGE&#x60; operation |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payWithExpressPreset**
> \Optile\Model\Charge payWithExpressPreset($preset_id, $operation)

Pay with confirmed express preset

Initiates `CHARGE` operation in scope of confirmed `EXPRESSPRESET` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$preset_id = "preset_id_example"; // string | The `longId` of a confirmed `EXPRESSPRESET` session to pay with
$operation = new \Optile\Model\ExpressOperation(); // \Optile\Model\ExpressOperation | Holds information for `CHARGE` operation, empty content for a common use case

try {
    $result = $apiInstance->payWithExpressPreset($preset_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->payWithExpressPreset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **preset_id** | **string**| The &#x60;longId&#x60; of a confirmed &#x60;EXPRESSPRESET&#x60; session to pay with |
 **operation** | [**\Optile\Model\ExpressOperation**](../Model/ExpressOperation.md)| Holds information for &#x60;CHARGE&#x60; operation, empty content for a common use case |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payWithPaymentAccount**
> \Optile\Model\Charge payWithPaymentAccount($list_id, $account_id, $operation)

Pay with selected registered account

Initiates `CHARGE` operation in scope of `LIST` session with selected registered account.  Note: This is only available for registered customers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `CHARGE` operation
$account_id = "account_id_example"; // string | The ID of account from registered customer to perform a `CHARGE` operation
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `CHARGE` operation with selected registered account

try {
    $result = $apiInstance->payWithPaymentAccount($list_id, $account_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->payWithPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation |
 **account_id** | **string**| The ID of account from registered customer to perform a &#x60;CHARGE&#x60; operation |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;CHARGE&#x60; operation with selected registered account |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payWithPaymentNetwork**
> \Optile\Model\Charge payWithPaymentNetwork($list_id, $network, $operation)

Pay with selected payment network

Initiates `CHARGE` operation in scope of `LIST` session with selected payment network.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `CHARGE` operation
$network = "network_example"; // string | The code of selected payment network
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `CHARGE` operation with selected payment network

try {
    $result = $apiInstance->payWithPaymentNetwork($list_id, $network, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->payWithPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation |
 **network** | **string**| The code of selected payment network |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;CHARGE&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **payWithSelectedPaymentNetwork**
> \Optile\Model\Charge payWithSelectedPaymentNetwork($list_id, $operation)

Pay with preset network or account

Initiates `CHARGE` operation in scope of `LIST` session with preset payment network or registered account.  Note: This method of payment should be used if `LIST` session was initialized with `presetFirst` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete a `CHARGE` operation
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds information for `CHARGE` operation with preset payment network

try {
    $result = $apiInstance->payWithSelectedPaymentNetwork($list_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->payWithSelectedPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds information for &#x60;CHARGE&#x60; operation with preset payment network |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **standalonePayment**
> \Optile\Model\Charge standalonePayment($transaction)

Stand-alone payment with selected payment network

Performs stand-alone `CHARGE` with predefined payment network and account without `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ChargeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction = new \Optile\Model\StandaloneTransaction(); // \Optile\Model\StandaloneTransaction | Holds transaction information for stand-alone `CHARGE` operation

try {
    $result = $apiInstance->standalonePayment($transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChargeApi->standalonePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction** | [**\Optile\Model\StandaloneTransaction**](../Model/StandaloneTransaction.md)| Holds transaction information for stand-alone &#x60;CHARGE&#x60; operation |

### Return type

[**\Optile\Model\Charge**](../Model/Charge.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

