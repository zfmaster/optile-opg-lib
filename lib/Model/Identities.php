<?php
/**
 * Identities
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
 * Identities Class Doc Comment
 *
 * @category Class
 * @description Customers identities. Important for payments with advanced risk management.
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Identities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Identities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'national_id' => '\Optile\Model\Identity',
        'travel_passport' => '\Optile\Model\Identity',
        'driving_license' => '\Optile\Model\Identity',
        'social_security' => '\Optile\Model\Identity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'national_id' => null,
        'travel_passport' => null,
        'driving_license' => null,
        'social_security' => null
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
        'national_id' => 'nationalId',
        'travel_passport' => 'travelPassport',
        'driving_license' => 'drivingLicense',
        'social_security' => 'socialSecurity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'national_id' => 'setNationalId',
        'travel_passport' => 'setTravelPassport',
        'driving_license' => 'setDrivingLicense',
        'social_security' => 'setSocialSecurity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'national_id' => 'getNationalId',
        'travel_passport' => 'getTravelPassport',
        'driving_license' => 'getDrivingLicense',
        'social_security' => 'getSocialSecurity'
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
        $this->container['national_id'] = isset($data['national_id']) ? $data['national_id'] : null;
        $this->container['travel_passport'] = isset($data['travel_passport']) ? $data['travel_passport'] : null;
        $this->container['driving_license'] = isset($data['driving_license']) ? $data['driving_license'] : null;
        $this->container['social_security'] = isset($data['social_security']) ? $data['social_security'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets national_id
     *
     * @return \Optile\Model\Identity
     */
    public function getNationalId()
    {
        return $this->container['national_id'];
    }

    /**
     * Sets national_id
     *
     * @param \Optile\Model\Identity $national_id Customer national ID (or 'ID card', or 'internal passport').
     *
     * @return $this
     */
    public function setNationalId($national_id)
    {
        $this->container['national_id'] = $national_id;

        return $this;
    }

    /**
     * Gets travel_passport
     *
     * @return \Optile\Model\Identity
     */
    public function getTravelPassport()
    {
        return $this->container['travel_passport'];
    }

    /**
     * Sets travel_passport
     *
     * @param \Optile\Model\Identity $travel_passport Information about customer's travel passport.
     *
     * @return $this
     */
    public function setTravelPassport($travel_passport)
    {
        $this->container['travel_passport'] = $travel_passport;

        return $this;
    }

    /**
     * Gets driving_license
     *
     * @return \Optile\Model\Identity
     */
    public function getDrivingLicense()
    {
        return $this->container['driving_license'];
    }

    /**
     * Sets driving_license
     *
     * @param \Optile\Model\Identity $driving_license Information about customer's driver license.
     *
     * @return $this
     */
    public function setDrivingLicense($driving_license)
    {
        $this->container['driving_license'] = $driving_license;

        return $this;
    }

    /**
     * Gets social_security
     *
     * @return \Optile\Model\Identity
     */
    public function getSocialSecurity()
    {
        return $this->container['social_security'];
    }

    /**
     * Sets social_security
     *
     * @param \Optile\Model\Identity $social_security Customer's social security information.
     *
     * @return $this
     */
    public function setSocialSecurity($social_security)
    {
        $this->container['social_security'] = $social_security;

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


