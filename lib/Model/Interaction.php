<?php
/**
 * Interaction
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
 * Interaction Class Doc Comment
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Interaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Interaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'reason' => 'string',
        'retry_after' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'reason' => null,
        'retry_after' => 'date-time'
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
        'code' => 'code',
        'reason' => 'reason',
        'retry_after' => 'retryAfter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'reason' => 'setReason',
        'retry_after' => 'setRetryAfter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'reason' => 'getReason',
        'retry_after' => 'getRetryAfter'
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

    const CODE_PROCEED = 'PROCEED';
    const CODE_ABORT = 'ABORT';
    const CODE_TRY_OTHER_NETWORK = 'TRY_OTHER_NETWORK';
    const CODE_TRY_OTHER_ACCOUNT = 'TRY_OTHER_ACCOUNT';
    const CODE_RETRY = 'RETRY';
    const CODE_RELOAD = 'RELOAD';
    const REASON_OK = 'OK';
    const REASON_PENDING = 'PENDING';
    const REASON_TRUSTED = 'TRUSTED';
    const REASON_STRONG_AUTHENTICATION = 'STRONG_AUTHENTICATION';
    const REASON_DECLINED = 'DECLINED';
    const REASON_EXPIRED = 'EXPIRED';
    const REASON_EXCEEDS_LIMIT = 'EXCEEDS_LIMIT';
    const REASON_TEMPORARY_FAILURE = 'TEMPORARY_FAILURE';
    const REASON_UNKNOWN = 'UNKNOWN';
    const REASON_NETWORK_FAILURE = 'NETWORK_FAILURE';
    const REASON_BLACKLISTED = 'BLACKLISTED';
    const REASON_BLOCKED = 'BLOCKED';
    const REASON_SYSTEM_FAILURE = 'SYSTEM_FAILURE';
    const REASON_INVALID_ACCOUNT = 'INVALID_ACCOUNT';
    const REASON_FRAUD = 'FRAUD';
    const REASON_ADDITIONAL_NETWORKS = 'ADDITIONAL_NETWORKS';
    const REASON_INVALID_REQUEST = 'INVALID_REQUEST';
    const REASON_SCHEDULED = 'SCHEDULED';
    const REASON_NO_NETWORKS = 'NO_NETWORKS';
    const REASON_DUPLICATE_OPERATION = 'DUPLICATE_OPERATION';
    const REASON_CHARGEBACK = 'CHARGEBACK';
    const REASON_RISK_DETECTED = 'RISK_DETECTED';
    const REASON_CUSTOMER_ABORT = 'CUSTOMER_ABORT';
    const REASON_EXPIRED_SESSION = 'EXPIRED_SESSION';
    const REASON_EXPIRED_ACCOUNT = 'EXPIRED_ACCOUNT';
    const REASON_ACCOUNT_NOT_ACTIVATED = 'ACCOUNT_NOT_ACTIVATED';
    const REASON_TRUSTED_CUSTOMER = 'TRUSTED_CUSTOMER';
    const REASON_UNKNOWN_CUSTOMER = 'UNKNOWN_CUSTOMER';
    const REASON_ACTIVATED = 'ACTIVATED';
    const REASON_UPDATED = 'UPDATED';
    const REASON_TAKE_ACTION = 'TAKE_ACTION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_PROCEED,
            self::CODE_ABORT,
            self::CODE_TRY_OTHER_NETWORK,
            self::CODE_TRY_OTHER_ACCOUNT,
            self::CODE_RETRY,
            self::CODE_RELOAD,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_OK,
            self::REASON_PENDING,
            self::REASON_TRUSTED,
            self::REASON_STRONG_AUTHENTICATION,
            self::REASON_DECLINED,
            self::REASON_EXPIRED,
            self::REASON_EXCEEDS_LIMIT,
            self::REASON_TEMPORARY_FAILURE,
            self::REASON_UNKNOWN,
            self::REASON_NETWORK_FAILURE,
            self::REASON_BLACKLISTED,
            self::REASON_BLOCKED,
            self::REASON_SYSTEM_FAILURE,
            self::REASON_INVALID_ACCOUNT,
            self::REASON_FRAUD,
            self::REASON_ADDITIONAL_NETWORKS,
            self::REASON_INVALID_REQUEST,
            self::REASON_SCHEDULED,
            self::REASON_NO_NETWORKS,
            self::REASON_DUPLICATE_OPERATION,
            self::REASON_CHARGEBACK,
            self::REASON_RISK_DETECTED,
            self::REASON_CUSTOMER_ABORT,
            self::REASON_EXPIRED_SESSION,
            self::REASON_EXPIRED_ACCOUNT,
            self::REASON_ACCOUNT_NOT_ACTIVATED,
            self::REASON_TRUSTED_CUSTOMER,
            self::REASON_UNKNOWN_CUSTOMER,
            self::REASON_ACTIVATED,
            self::REASON_UPDATED,
            self::REASON_TAKE_ACTION,
        ];
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['retry_after'] = isset($data['retry_after']) ? $data['retry_after'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code Interaction code that advices further interaction with this customer or payment. See list of [Interaction Codes](https://www.optile.io/opg#292619).
     *
     * @return $this
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason Reason of this interaction, complements interaction code and has more detailed granularity. See list of [Interaction Codes](https://www.optile.io/opg#292619).
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets retry_after
     *
     * @return \DateTime
     */
    public function getRetryAfter()
    {
        return $this->container['retry_after'];
    }

    /**
     * Sets retry_after
     *
     * @param \DateTime $retry_after If supplied, holds recommended time for next retry. Only applicable for recurring payments.
     *
     * @return $this
     */
    public function setRetryAfter($retry_after)
    {
        $this->container['retry_after'] = $retry_after;

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


