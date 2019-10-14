# Optile\RegistrationApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registerPaymentAccount**](RegistrationApi.md#registerPaymentAccount) | **POST** /lists/{listId}/{network}/register | Register new account
[**setPaymentAccountAsPreferred**](RegistrationApi.md#setPaymentAccountAsPreferred) | **POST** /lists/{listId}/accounts/{accountId}/setpreferred | Sets registered account as preferred
[**unregisterPaymentAccount**](RegistrationApi.md#unregisterPaymentAccount) | **DELETE** /lists/{listId}/accounts/{accountId} | Delete registered account via LIST
[**updatePaymentAccount**](RegistrationApi.md#updatePaymentAccount) | **POST** /lists/{listId}/accounts/{accountId}/update | Update selected registered account


# **registerPaymentAccount**
> \Optile\Model\OperationResult registerPaymentAccount($list_id, $network, $operation)

Register new account

Register provided account to use it as registered network later.  Note: This is only available if `LIST` session was initialized with `updateOnly` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete an account registration
$network = "network_example"; // string | The code of payment network to register
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds account information to register selected payment network

try {
    $result = $apiInstance->registerPaymentAccount($list_id, $network, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->registerPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete an account registration |
 **network** | **string**| The code of payment network to register |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds account information to register selected payment network |

### Return type

[**\Optile\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPaymentAccountAsPreferred**
> \Optile\Model\OperationResult setPaymentAccountAsPreferred($list_id, $account_id)

Sets registered account as preferred

Sets registered account as preferred for next recurring charges.  Note: This is only available for registered customers and `LIST` sessions that was initialized with `updateOnly` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete an `UPDATE` operation
$account_id = "account_id_example"; // string | The ID of account from registered customer to perform an `UPDATE` operation to set this account as preferred one

try {
    $result = $apiInstance->setPaymentAccountAsPreferred($list_id, $account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->setPaymentAccountAsPreferred: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete an &#x60;UPDATE&#x60; operation |
 **account_id** | **string**| The ID of account from registered customer to perform an &#x60;UPDATE&#x60; operation to set this account as preferred one |

### Return type

[**\Optile\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unregisterPaymentAccount**
> \Optile\Model\OperationResult unregisterPaymentAccount($list_id, $account_id, $deregistration_data)

Delete registered account via LIST

Delete all existing payment service provider registrations of selected registration type.  Note that `LIST` session must been initialized with `updateOnly` option in order to allow this operation.  By default registration to delete is detected from `LIST` channel. Optionally de-registration instructions may be provided in the body of this request with following logic:   * If body is present     * and `deleteRegistration` is set to `true` then account registration is deleted     * and `deleteRecurrence` is set to `true` then recurring registration is deleted   * If body is absent     * and `LIST` channel is set to `RECURRING` then recurring registration is deleted     * and `LIST` channel is anything but `RECURRING` then account registration is deleted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session
$account_id = "account_id_example"; // string | The ID of account to delete
$deregistration_data = new \Optile\Model\DeregistrationData(); // \Optile\Model\DeregistrationData | Holds de-registration instructions about what types of registrations should be deleted. This information is optional and will be auto-detected based on channel if it is not provided.

try {
    $result = $apiInstance->unregisterPaymentAccount($list_id, $account_id, $deregistration_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->unregisterPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session |
 **account_id** | **string**| The ID of account to delete |
 **deregistration_data** | [**\Optile\Model\DeregistrationData**](../Model/DeregistrationData.md)| Holds de-registration instructions about what types of registrations should be deleted. This information is optional and will be auto-detected based on channel if it is not provided. | [optional]

### Return type

[**\Optile\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentAccount**
> \Optile\Model\OperationResult updatePaymentAccount($list_id, $account_id, $operation)

Update selected registered account

Updates selected registered account.  Note: This is only available for registered customers and `LIST` sessions that was initialized with `updateOnly` option.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\RegistrationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to complete an `UPDATE` operation
$account_id = "account_id_example"; // string | The ID of account from registered customer to perform an `UPDATE` operation
$operation = new \Optile\Model\Operation(); // \Optile\Model\Operation | Holds new account information for `UPDATE` operation with selected payment network

try {
    $result = $apiInstance->updatePaymentAccount($list_id, $account_id, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationApi->updatePaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete an &#x60;UPDATE&#x60; operation |
 **account_id** | **string**| The ID of account from registered customer to perform an &#x60;UPDATE&#x60; operation |
 **operation** | [**\Optile\Model\Operation**](../Model/Operation.md)| Holds new account information for &#x60;UPDATE&#x60; operation with selected payment network |

### Return type

[**\Optile\Model\OperationResult**](../Model/OperationResult.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

