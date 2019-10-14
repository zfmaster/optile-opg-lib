# Optile\ListApi

All URIs are relative to *https://api.sandbox.oscato.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelPaymentSession**](ListApi.md#cancelPaymentSession) | **DELETE** /lists/{listId} | Cancel LIST session
[**createPaymentSession**](ListApi.md#createPaymentSession) | **POST** /lists | Create new payment session
[**getPaymentAccount**](ListApi.md#getPaymentAccount) | **GET** /lists/{listId}/accounts/{accountId} | Get registered account of LIST
[**getPaymentNetwork**](ListApi.md#getPaymentNetwork) | **GET** /lists/{listId}/{network} | Get payment network of LIST
[**getPaymentSession**](ListApi.md#getPaymentSession) | **GET** /lists/{listId} | Get LIST session details
[**selectPaymentAccount**](ListApi.md#selectPaymentAccount) | **PUT** /lists/{listId}/accounts/{accountId} | Select registered account of LIST
[**selectPaymentNetwork**](ListApi.md#selectPaymentNetwork) | **PUT** /lists/{listId}/{network} | Select payment network of LIST
[**updatePaymentSession**](ListApi.md#updatePaymentSession) | **PUT** /lists/{listId} | Update LIST session details


# **cancelPaymentSession**
> cancelPaymentSession($list_id)

Cancel LIST session

Requests cancelation of a `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to cancel

try {
    $apiInstance->cancelPaymentSession($list_id);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->cancelPaymentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to cancel |

### Return type

void (empty response body)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createPaymentSession**
> \Optile\Model\NetworkList createPaymentSession($transaction, $view)

Create new payment session

Initializes a payment session by executing `LIST` operation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction = new \Optile\Model\Transaction(); // \Optile\Model\Transaction | Transaction to initialize payment session
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->createPaymentSession($transaction, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->createPaymentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction** | [**\Optile\Model\Transaction**](../Model/Transaction.md)| Transaction to initialize payment session |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\NetworkList**](../Model/NetworkList.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentAccount**
> \Optile\Model\AccountRegistration getPaymentAccount($list_id, $account_id, $view)

Get registered account of LIST

Gets customer registered account in scope of initialized `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session
$account_id = "account_id_example"; // string | The ID of account from registered customer
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->getPaymentAccount($list_id, $account_id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session |
 **account_id** | **string**| The ID of account from registered customer |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\AccountRegistration**](../Model/AccountRegistration.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentNetwork**
> \Optile\Model\ApplicableNetwork getPaymentNetwork($list_id, $network, $view)

Get payment network of LIST

Retrieves information about payment network in scope of active `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session
$network = "network_example"; // string | Network code of network to retrieve
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->getPaymentNetwork($list_id, $network, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session |
 **network** | **string**| Network code of network to retrieve |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\ApplicableNetwork**](../Model/ApplicableNetwork.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPaymentSession**
> \Optile\Model\NetworkList getPaymentSession($list_id, $view)

Get LIST session details

Retrieves current state of a `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to retrieve
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options. Supplying unknown options or conflicting options combination (e.g. \"-jsonForms,jsonForms\") will cause an error and HTTP 400 (Bad Request) response.  Following options are supported:   * `htmlForms` - this option enables generation of links to build HTML forms for applicable networks and registered     accounts in `LIST` response. **Enabled** by default.   * `jsonForms` - this option enables generation of structured (in JSON format) description of forms for applicable     networks and registered accounts in `LIST` response. **Disabled** by default.   * `routes` - this option enables routing configuration to be exposed for applicable networks and registered accounts     in `LIST` response. **Disabled** by default.  Note: if no value supplied for an option the API behaves according to the defaults. Empty `view` parameter is interpreted as **\"htmlForms,-jsonForms,-routes\"**

try {
    $result = $apiInstance->getPaymentSession($list_id, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->getPaymentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to retrieve |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options. Supplying unknown options or conflicting options combination (e.g. \&quot;-jsonForms,jsonForms\&quot;) will cause an error and HTTP 400 (Bad Request) response.  Following options are supported:   * &#x60;htmlForms&#x60; - this option enables generation of links to build HTML forms for applicable networks and registered     accounts in &#x60;LIST&#x60; response. **Enabled** by default.   * &#x60;jsonForms&#x60; - this option enables generation of structured (in JSON format) description of forms for applicable     networks and registered accounts in &#x60;LIST&#x60; response. **Disabled** by default.   * &#x60;routes&#x60; - this option enables routing configuration to be exposed for applicable networks and registered accounts     in &#x60;LIST&#x60; response. **Disabled** by default.  Note: if no value supplied for an option the API behaves according to the defaults. Empty &#x60;view&#x60; parameter is interpreted as **\&quot;htmlForms,-jsonForms,-routes\&quot;** | [optional]

### Return type

[**\Optile\Model\NetworkList**](../Model/NetworkList.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **selectPaymentAccount**
> \Optile\Model\AccountRegistration selectPaymentAccount($list_id, $account_id, $network_selection, $view)

Select registered account of LIST

Pre-selects a registered account in scope of active `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session
$account_id = "account_id_example"; // string | The ID of account from registered customer to be selected
$network_selection = new \Optile\Model\NetworkSelection(); // \Optile\Model\NetworkSelection | Holds information that network should be selected or unselected
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->selectPaymentAccount($list_id, $account_id, $network_selection, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->selectPaymentAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session |
 **account_id** | **string**| The ID of account from registered customer to be selected |
 **network_selection** | [**\Optile\Model\NetworkSelection**](../Model/NetworkSelection.md)| Holds information that network should be selected or unselected |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\AccountRegistration**](../Model/AccountRegistration.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **selectPaymentNetwork**
> \Optile\Model\ApplicableNetwork selectPaymentNetwork($list_id, $network, $network_selection, $view)

Select payment network of LIST

Pre-selects a payment network in scope of active `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session
$network = "network_example"; // string | The code of selected payment network
$network_selection = new \Optile\Model\NetworkSelection(); // \Optile\Model\NetworkSelection | Holds information that network should be selected or unselected
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->selectPaymentNetwork($list_id, $network, $network_selection, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->selectPaymentNetwork: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session |
 **network** | **string**| The code of selected payment network |
 **network_selection** | [**\Optile\Model\NetworkSelection**](../Model/NetworkSelection.md)| Holds information that network should be selected or unselected |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\ApplicableNetwork**](../Model/ApplicableNetwork.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePaymentSession**
> \Optile\Model\NetworkList updatePaymentSession($list_id, $transaction, $view)

Update LIST session details

Allows to update some parts of transaction information (customer, payment, products) of initialized `LIST` session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: payment_auth
$config = Optile\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Optile\Api\ListApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$list_id = "list_id_example"; // string | The `longId` of a `LIST` session to update
$transaction = new \Optile\Model\Transaction(); // \Optile\Model\Transaction | Transaction to update list session
$view = array("view_example"); // string[] | Enables or disables view options to configure response when creating or retrieving `LIST`. Multiple options can be combined in the single value of the `view` query parameter. Use comma (\",\") to separate options.  See \"Get LIST session details\" for more detailed information about the `view` query parameter.

try {
    $result = $apiInstance->updatePaymentSession($list_id, $transaction, $view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListApi->updatePaymentSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **string**| The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to update |
 **transaction** | [**\Optile\Model\Transaction**](../Model/Transaction.md)| Transaction to update list session |
 **view** | [**string[]**](../Model/string.md)| Enables or disables view options to configure response when creating or retrieving &#x60;LIST&#x60;. Multiple options can be combined in the single value of the &#x60;view&#x60; query parameter. Use comma (\&quot;,\&quot;) to separate options.  See \&quot;Get LIST session details\&quot; for more detailed information about the &#x60;view&#x60; query parameter. | [optional]

### Return type

[**\Optile\Model\NetworkList**](../Model/NetworkList.md)

### Authorization

[payment_auth](../../README.md#payment_auth)

### HTTP request headers

 - **Content-Type**: application/vnd.optile.payment.enterprise-v1-extensible+json
 - **Accept**: application/vnd.optile.payment.enterprise-v1-extensible+json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

