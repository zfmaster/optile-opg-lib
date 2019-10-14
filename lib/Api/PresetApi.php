<?php
/**
 * PresetApi
 * PHP version 5
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Server Payment API
 *
 * RESTful API for payments via optile Open Payment Gateway (OPG) for server to server communication. Calls to this API require authorization.  ## Current version   * API service version: `1.1.289`   * API model version: `1.20.87`
 *
 * OpenAPI spec version: 1.1.289
 * Contact: support@optile.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Optile\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Optile\ApiException;
use Optile\Configuration;
use Optile\HeaderSelector;
use Optile\ObjectSerializer;

/**
 * PresetApi Class Doc Comment
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PresetApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation presetPaymentAccount
     *
     * Preset registered account of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation (required)
     * @param  string $account_id The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \Optile\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Optile\Model\Preset
     */
    public function presetPaymentAccount($list_id, $account_id, $operation)
    {
        list($response) = $this->presetPaymentAccountWithHttpInfo($list_id, $account_id, $operation);
        return $response;
    }

    /**
     * Operation presetPaymentAccountWithHttpInfo
     *
     * Preset registered account of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation (required)
     * @param  string $account_id The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \Optile\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Optile\Model\Preset, HTTP status code, HTTP response headers (array of strings)
     */
    public function presetPaymentAccountWithHttpInfo($list_id, $account_id, $operation)
    {
        $returnType = '\Optile\Model\Preset';
        $request = $this->presetPaymentAccountRequest($list_id, $account_id, $operation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\Preset',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\ErrorInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\ErrorInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation presetPaymentAccountAsync
     *
     * Preset registered account of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation (required)
     * @param  string $account_id The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presetPaymentAccountAsync($list_id, $account_id, $operation)
    {
        return $this->presetPaymentAccountAsyncWithHttpInfo($list_id, $account_id, $operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation presetPaymentAccountAsyncWithHttpInfo
     *
     * Preset registered account of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation (required)
     * @param  string $account_id The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presetPaymentAccountAsyncWithHttpInfo($list_id, $account_id, $operation)
    {
        $returnType = '\Optile\Model\Preset';
        $request = $this->presetPaymentAccountRequest($list_id, $account_id, $operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'presetPaymentAccount'
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;CHARGE&#x60; operation (required)
     * @param  string $account_id The ID of account from registered customer to perform a &#x60;PRESET&#x60; operation (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function presetPaymentAccountRequest($list_id, $account_id, $operation)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling presetPaymentAccount'
            );
        }
        // verify the required parameter 'account_id' is set
        if ($account_id === null || (is_array($account_id) && count($account_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_id when calling presetPaymentAccount'
            );
        }
        // verify the required parameter 'operation' is set
        if ($operation === null || (is_array($operation) && count($operation) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $operation when calling presetPaymentAccount'
            );
        }

        $resourcePath = '/lists/{listId}/accounts/{accountId}/preset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'listId' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                '{' . 'accountId' . '}',
                ObjectSerializer::toPathValue($account_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($operation)) {
            $_tempBody = $operation;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.optile.payment.enterprise-v1-extensible+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.optile.payment.enterprise-v1-extensible+json'],
                ['application/vnd.optile.payment.enterprise-v1-extensible+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation presetPaymentNetwork
     *
     * Preset payment network of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation (required)
     * @param  string $network The code of selected payment network (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \Optile\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Optile\Model\Preset
     */
    public function presetPaymentNetwork($list_id, $network, $operation)
    {
        list($response) = $this->presetPaymentNetworkWithHttpInfo($list_id, $network, $operation);
        return $response;
    }

    /**
     * Operation presetPaymentNetworkWithHttpInfo
     *
     * Preset payment network of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation (required)
     * @param  string $network The code of selected payment network (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \Optile\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Optile\Model\Preset, HTTP status code, HTTP response headers (array of strings)
     */
    public function presetPaymentNetworkWithHttpInfo($list_id, $network, $operation)
    {
        $returnType = '\Optile\Model\Preset';
        $request = $this->presetPaymentNetworkRequest($list_id, $network, $operation);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\Preset',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\ErrorInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Optile\Model\ErrorInfo',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation presetPaymentNetworkAsync
     *
     * Preset payment network of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation (required)
     * @param  string $network The code of selected payment network (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presetPaymentNetworkAsync($list_id, $network, $operation)
    {
        return $this->presetPaymentNetworkAsyncWithHttpInfo($list_id, $network, $operation)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation presetPaymentNetworkAsyncWithHttpInfo
     *
     * Preset payment network of LIST
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation (required)
     * @param  string $network The code of selected payment network (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function presetPaymentNetworkAsyncWithHttpInfo($list_id, $network, $operation)
    {
        $returnType = '\Optile\Model\Preset';
        $request = $this->presetPaymentNetworkRequest($list_id, $network, $operation);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'presetPaymentNetwork'
     *
     * @param  string $list_id The &#x60;longId&#x60; of a &#x60;LIST&#x60; session to complete a &#x60;PRESET&#x60; operation (required)
     * @param  string $network The code of selected payment network (required)
     * @param  \Optile\Model\Operation $operation Holds information for &#x60;PRESET&#x60; operation with selected payment network (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function presetPaymentNetworkRequest($list_id, $network, $operation)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null || (is_array($list_id) && count($list_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $list_id when calling presetPaymentNetwork'
            );
        }
        // verify the required parameter 'network' is set
        if ($network === null || (is_array($network) && count($network) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $network when calling presetPaymentNetwork'
            );
        }
        // verify the required parameter 'operation' is set
        if ($operation === null || (is_array($operation) && count($operation) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $operation when calling presetPaymentNetwork'
            );
        }

        $resourcePath = '/lists/{listId}/{network}/preset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($list_id !== null) {
            $resourcePath = str_replace(
                '{' . 'listId' . '}',
                ObjectSerializer::toPathValue($list_id),
                $resourcePath
            );
        }
        // path params
        if ($network !== null) {
            $resourcePath = str_replace(
                '{' . 'network' . '}',
                ObjectSerializer::toPathValue($network),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($operation)) {
            $_tempBody = $operation;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/vnd.optile.payment.enterprise-v1-extensible+json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/vnd.optile.payment.enterprise-v1-extensible+json'],
                ['application/vnd.optile.payment.enterprise-v1-extensible+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if ($this->config->getUsername() !== null || $this->config->getPassword() !== null) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
