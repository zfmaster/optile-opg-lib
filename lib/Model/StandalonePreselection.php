<?php
/**
 * StandalonePreselection
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
 * StandalonePreselection Class Doc Comment
 *
 * @category Class
 * @description The preselection settings influence the resulted payment network and steer its behavior (like deferral) during stand-alone operation.
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StandalonePreselection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'StandalonePreselection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deferral' => 'string',
        'network_codes' => 'string[]',
        'challenge_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deferral' => null,
        'network_codes' => null,
        'challenge_indicator' => null
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
        'deferral' => 'deferral',
        'network_codes' => 'networkCodes',
        'challenge_indicator' => 'challengeIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deferral' => 'setDeferral',
        'network_codes' => 'setNetworkCodes',
        'challenge_indicator' => 'setChallengeIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deferral' => 'getDeferral',
        'network_codes' => 'getNetworkCodes',
        'challenge_indicator' => 'getChallengeIndicator'
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

    const DEFERRAL_ANY = 'ANY';
    const DEFERRAL_DEFERRED = 'DEFERRED';
    const DEFERRAL_NON_DEFERRED = 'NON_DEFERRED';
    const CHALLENGE_INDICATOR_NO_PREFERENCE = 'NO_PREFERENCE,';
    const CHALLENGE_INDICATOR_NO_CHALLENGE_REQUESTED = 'NO_CHALLENGE_REQUESTED,';
    const CHALLENGE_INDICATOR_CHALLENGE_REQUESTED_MERCHANT = 'CHALLENGE_REQUESTED_MERCHANT,';
    const CHALLENGE_INDICATOR_CHALLENGE_REQUESTED_MANDATE = 'CHALLENGE_REQUESTED_MANDATE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeferralAllowableValues()
    {
        return [
            self::DEFERRAL_ANY,
            self::DEFERRAL_DEFERRED,
            self::DEFERRAL_NON_DEFERRED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getChallengeIndicatorAllowableValues()
    {
        return [
            self::CHALLENGE_INDICATOR_NO_PREFERENCE,
            self::CHALLENGE_INDICATOR_NO_CHALLENGE_REQUESTED,
            self::CHALLENGE_INDICATOR_CHALLENGE_REQUESTED_MERCHANT,
            self::CHALLENGE_INDICATOR_CHALLENGE_REQUESTED_MANDATE,
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
        $this->container['deferral'] = isset($data['deferral']) ? $data['deferral'] : null;
        $this->container['network_codes'] = isset($data['network_codes']) ? $data['network_codes'] : null;
        $this->container['challenge_indicator'] = isset($data['challenge_indicator']) ? $data['challenge_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDeferralAllowableValues();
        if (!is_null($this->container['deferral']) && !in_array($this->container['deferral'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'deferral', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['network_codes'] === null) {
            $invalidProperties[] = "'network_codes' can't be null";
        }
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($this->container['challenge_indicator']) && !in_array($this->container['challenge_indicator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'challenge_indicator', must be one of '%s'",
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
     * Gets deferral
     *
     * @return string
     */
    public function getDeferral()
    {
        return $this->container['deferral'];
    }

    /**
     * Sets deferral
     *
     * @param string $deferral Instructs a deferred behavior of payment networks. See [Deferred Payments](https://www.optile.io/opg#285066) for more details.  **Default** behavior is `NON_DEFERRED`.
     *
     * @return $this
     */
    public function setDeferral($deferral)
    {
        $allowedValues = $this->getDeferralAllowableValues();
        if (!is_null($deferral) && !in_array($deferral, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'deferral', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['deferral'] = $deferral;

        return $this;
    }

    /**
     * Gets network_codes
     *
     * @return string[]
     */
    public function getNetworkCodes()
    {
        return $this->container['network_codes'];
    }

    /**
     * Sets network_codes
     *
     * @param string[] $network_codes Network codes for stand-alone operation. Only one network code is expected for this type of transactions.
     *
     * @return $this
     */
    public function setNetworkCodes($network_codes)
    {
        $this->container['network_codes'] = $network_codes;

        return $this;
    }

    /**
     * Gets challenge_indicator
     *
     * @return string
     */
    public function getChallengeIndicator()
    {
        return $this->container['challenge_indicator'];
    }

    /**
     * Sets challenge_indicator
     *
     * @param string $challenge_indicator Indicates whether a challenge is requested for this transaction.
     *
     * @return $this
     */
    public function setChallengeIndicator($challenge_indicator)
    {
        $allowedValues = $this->getChallengeIndicatorAllowableValues();
        if (!is_null($challenge_indicator) && !in_array($challenge_indicator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'challenge_indicator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['challenge_indicator'] = $challenge_indicator;

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

