# Optile\CustomerApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomerRegistration**](CustomerApi.md#deleteCustomerRegistration) | **DELETE** /customers/{customerId} | Delete customer registration
[**getCustomerPaymentAccount**](CustomerApi.md#getCustomerPaymentAccount) | **GET** /customers/{customerId}/accounts/{accountId} | Get customer account details
[**getCustomerPaymentAccounts**](CustomerApi.md#getCustomerPaymentAccounts) | **GET** /customers/{customerId}/accounts | Get customer accounts
[**getCustomerRegistration**](CustomerApi.md#getCustomerRegistration) | **GET** /customers/{customerId} | Get customer details


# **deleteCustomerRegistration**
> \Optile\Model\CustomerRegistration deleteCustomerRegistration($customer_id)

Delete customer registration

Deletes customer registration based on customer registration ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Optile\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_id = "customer_id_example"; // string | The ID of a customer registered at optile

try {
    $result = $apiInstance->deleteCustomerRegistration($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->deleteCustomerRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of a customer registered at optile |

### Return type

[**\Optile\Model\CustomerRegistration**](../Model/CustomerRegistration.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentAccount**
> \Optile\Model\AccountRegistration getCustomerPaymentAccount($customer_id, $account_id)

Get customer account details

Gets details about customer's registered account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The ID of a customer registered at optile
$account_id = "account_id_example"; // string | The ID of a registered for this customer account

try {
    $result = $apiInstance->getCustomerPaymentAccount($customer_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of a customer registered at optile |
 **account_id** | **string**| The ID of a registered for this customer account |

### Return type

[**\Optile\Model\AccountRegistration**](../Model/AccountRegistration.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerPaymentAccounts**
> \Optile\Model\AccountRegistration[] getCustomerPaymentAccounts($customer_id)

Get customer accounts

Gets customer's registered accounts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The ID of a customer registered at optile

try {
    $result = $apiInstance->getCustomerPaymentAccounts($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerPaymentAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of a customer registered at optile |

### Return type

[**\Optile\Model\AccountRegistration[]**](../Model/AccountRegistration.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomerRegistration**
> \Optile\Model\CustomerRegistration getCustomerRegistration($customer_id)

Get customer details

Gets customer information based on customer registration ID. Customer info includes customer's data like names, phones, addresses as well active registered accounts.  Note: This is only available for customers whose accounts were registered at OPG during account registration process.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = "customer_id_example"; // string | The ID of a customer registered at optile

try {
    $result = $apiInstance->getCustomerRegistration($customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->getCustomerRegistration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **string**| The ID of a customer registered at optile |

### Return type

[**\Optile\Model\CustomerRegistration**](../Model/CustomerRegistration.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

