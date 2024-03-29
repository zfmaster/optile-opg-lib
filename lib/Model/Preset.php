<?php
/**
 * Preset
 *
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

namespace Optile\Model;

use \ArrayAccess;
use \Optile\ObjectSerializer;

/**
 * Preset Class Doc Comment
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Preset implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Preset';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'links' => '\Optile\Model\PresetLinks',
        'result_info' => 'string',
        'status' => '\Optile\Model\Status',
        'redirect' => '\Optile\Model\Redirect',
        'network' => 'string',
        'masked_account' => '\Optile\Model\AccountMask',
        'interaction' => '\Optile\Model\Interaction',
        'result_code' => 'string',
        'return_code' => '\Optile\Model\ReturnCode',
        'identification' => '\Optile\Model\Identification',
        'timestamp' => '\DateTime',
        'provider_response' => '\Optile\Model\ProviderParameters'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'links' => null,
        'result_info' => null,
        'status' => null,
        'redirect' => null,
        'network' => null,
        'masked_account' => null,
        'interaction' => null,
        'result_code' => null,
        'return_code' => null,
        'identification' => null,
        'timestamp' => 'date-time',
        'provider_response' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'links' => 'links',
        'result_info' => 'resultInfo',
        'status' => 'status',
        'redirect' => 'redirect',
        'network' => 'network',
        'masked_account' => 'maskedAccount',
        'interaction' => 'interaction',
        'result_code' => 'resultCode',
        'return_code' => 'returnCode',
        'identification' => 'identification',
        'timestamp' => 'timestamp',
        'provider_response' => 'providerResponse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'links' => 'setLinks',
        'result_info' => 'setResultInfo',
        'status' => 'setStatus',
        'redirect' => 'setRedirect',
        'network' => 'setNetwork',
        'masked_account' => 'setMaskedAccount',
        'interaction' => 'setInteraction',
        'result_code' => 'setResultCode',
        'return_code' => 'setReturnCode',
        'identification' => 'setIdentification',
        'timestamp' => 'setTimestamp',
        'provider_response' => 'setProviderResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'links' => 'getLinks',
        'result_info' => 'getResultInfo',
        'status' => 'getStatus',
        'redirect' => 'getRedirect',
        'network' => 'getNetwork',
        'masked_account' => 'getMaskedAccount',
        'interaction' => 'getInteraction',
        'result_code' => 'getResultCode',
        'return_code' => 'getReturnCode',
        'identification' => 'getIdentification',
        'timestamp' => 'getTimestamp',
        'provider_response' => 'getProviderResponse'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['result_info'] = isset($data['result_info']) ? $data['result_info'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['redirect'] = isset($data['redirect']) ? $data['redirect'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['masked_account'] = isset($data['masked_account']) ? $data['masked_account'] : null;
        $this->container['interaction'] = isset($data['interaction']) ? $data['interaction'] : null;
        $this->container['result_code'] = isset($data['result_code']) ? $data['result_code'] : null;
        $this->container['return_code'] = isset($data['return_code']) ? $data['return_code'] : null;
        $this->container['identification'] = isset($data['identification']) ? $data['identification'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['provider_response'] = isset($data['provider_response']) ? $data['provider_response'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['links'] === null) {
            $invalidProperties[] = "'links' can't be null";
        }
        if ($this->container['result_info'] === null) {
            $invalidProperties[] = "'result_info' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['interaction'] === null) {
            $invalidProperties[] = "'interaction' can't be null";
        }
        if ($this->container['result_code'] === null) {
            $invalidProperties[] = "'result_code' can't be null";
        }
        if ($this->container['identification'] === null) {
            $invalidProperties[] = "'identification' can't be null";
        }
        if ($this->container['timestamp'] === null) {
            $invalidProperties[] = "'timestamp' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets links
     *
     * @return \Optile\Model\PresetLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Optile\Model\PresetLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets result_info
     *
     * @return string
     */
    public function getResultInfo()
    {
        return $this->container['result_info'];
    }

    /**
     * Sets result_info
     *
     * @param string $result_info Descriptive information that complements the result code and interaction advice.
     *
     * @return $this
     */
    public function setResultInfo($result_info)
    {
        $this->container['result_info'] = $result_info;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Optile\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Optile\Model\Status $status Current status of this `PRESET`. See list of all [Status Codes](https://www.optile.io/opg#285186).
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets redirect
     *
     * @return \Optile\Model\Redirect
     */
    public function getRedirect()
    {
        return $this->container['redirect'];
    }

    /**
     * Sets redirect
     *
     * @param \Optile\Model\Redirect $redirect If present, merchant is advised to redirect customer to corresponding redirect URL.  This will lead to either PSP web-site to complete initiated `PRESET`, or it will be pointing to one of the merchants callback URLs from `LIST` session.
     *
     * @return $this
     */
    public function setRedirect($redirect)
    {
        $this->container['redirect'] = $redirect;

        return $this;
    }

    /**
     * Gets network
     *
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param string $network Network code of preset network or account.
     *
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets masked_account
     *
     * @return \Optile\Model\AccountMask
     */
    public function getMaskedAccount()
    {
        return $this->container['masked_account'];
    }

    /**
     * Sets masked_account
     *
     * @param \Optile\Model\AccountMask $masked_account masked_account
     *
     * @return $this
     */
    public function setMaskedAccount($masked_account)
    {
        $this->container['masked_account'] = $masked_account;

        return $this;
    }

    /**
     * Gets interaction
     *
     * @return \Optile\Model\Interaction
     */
    public function getInteraction()
    {
        return $this->container['interaction'];
    }

    /**
     * Sets interaction
     *
     * @param \Optile\Model\Interaction $interaction Interaction advice for this `PRESET` according to its current state.
     *
     * @return $this
     */
    public function setInteraction($interaction)
    {
        $this->container['interaction'] = $interaction;

        return $this;
    }

    /**
     * Gets result_code
     *
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['result_code'];
    }

    /**
     * Sets result_code
     *
     * @param string $result_code Result code of this `PRESET` that reflects current state. See list of all [Result Codes](https://www.optile.io/opg#294007).
     *
     * @return $this
     */
    public function setResultCode($result_code)
    {
        $this->container['result_code'] = $result_code;

        return $this;
    }

    /**
     * Gets return_code
     *
     * @return \Optile\Model\ReturnCode
     */
    public function getReturnCode()
    {
        return $this->container['return_code'];
    }

    /**
     * Sets return_code
     *
     * @param \Optile\Model\ReturnCode $return_code return_code
     *
     * @return $this
     */
    public function setReturnCode($return_code)
    {
        $this->container['return_code'] = $return_code;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return \Optile\Model\Identification
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \Optile\Model\Identification $identification identification
     *
     * @return $this
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param \DateTime $timestamp Date and time this `PRESET` was initiated at.
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets provider_response
     *
     * @return \Optile\Model\ProviderParameters
     */
    public function getProviderResponse()
    {
        return $this->container['provider_response'];
    }

    /**
     * Sets provider_response
     *
     * @param \Optile\Model\ProviderParameters $provider_response Provider response data given back by the target provider as a result of transaction action. This data should contain all needed information to continue customer's journey on the payment page in the scope of used network.
     *
     * @return $this
     */
    public function setProviderResponse($provider_response)
    {
        $this->container['provider_response'] = $provider_response;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


