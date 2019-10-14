<?php
/**
 * Customer
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @description Information about customer.
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account_info' => '\Optile\Model\AccountInfo',
        'number' => 'string',
        'email' => 'string',
        'delivery_email' => 'string',
        'birthday' => '\DateTime',
        'gender' => 'string',
        'name' => '\Optile\Model\Name',
        'company' => '\Optile\Model\Company',
        'addresses' => '\Optile\Model\CustomerAddresses',
        'phones' => '\Optile\Model\Phones',
        'registration' => '\Optile\Model\Registration',
        'identities' => '\Optile\Model\Identities'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account_info' => null,
        'number' => null,
        'email' => 'email',
        'delivery_email' => 'email',
        'birthday' => 'date',
        'gender' => null,
        'name' => null,
        'company' => null,
        'addresses' => null,
        'phones' => null,
        'registration' => null,
        'identities' => null
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
        'account_info' => 'accountInfo',
        'number' => 'number',
        'email' => 'email',
        'delivery_email' => 'deliveryEmail',
        'birthday' => 'birthday',
        'gender' => 'gender',
        'name' => 'name',
        'company' => 'company',
        'addresses' => 'addresses',
        'phones' => 'phones',
        'registration' => 'registration',
        'identities' => 'identities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_info' => 'setAccountInfo',
        'number' => 'setNumber',
        'email' => 'setEmail',
        'delivery_email' => 'setDeliveryEmail',
        'birthday' => 'setBirthday',
        'gender' => 'setGender',
        'name' => 'setName',
        'company' => 'setCompany',
        'addresses' => 'setAddresses',
        'phones' => 'setPhones',
        'registration' => 'setRegistration',
        'identities' => 'setIdentities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_info' => 'getAccountInfo',
        'number' => 'getNumber',
        'email' => 'getEmail',
        'delivery_email' => 'getDeliveryEmail',
        'birthday' => 'getBirthday',
        'gender' => 'getGender',
        'name' => 'getName',
        'company' => 'getCompany',
        'addresses' => 'getAddresses',
        'phones' => 'getPhones',
        'registration' => 'getRegistration',
        'identities' => 'getIdentities'
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

    const GENDER_MALE = 'MALE';
    const GENDER_FEMALE = 'FEMALE';
    const GENDER_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_MALE,
            self::GENDER_FEMALE,
            self::GENDER_UNKNOWN,
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
        $this->container['account_info'] = isset($data['account_info']) ? $data['account_info'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['delivery_email'] = isset($data['delivery_email']) ? $data['delivery_email'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['registration'] = isset($data['registration']) ? $data['registration'] : null;
        $this->container['identities'] = isset($data['identities']) ? $data['identities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
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
     * Gets account_info
     *
     * @return \Optile\Model\AccountInfo
     */
    public function getAccountInfo()
    {
        return $this->container['account_info'];
    }

    /**
     * Sets account_info
     *
     * @param \Optile\Model\AccountInfo $account_info Customer account information.
     *
     * @return $this
     */
    public function setAccountInfo($account_info)
    {
        $this->container['account_info'] = $account_info;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number Customer identifier given by the merchant. Not validated for uniqueness by OPG.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Customer e-mail address. It is highly recommended to provide it, since it is a mandatory information for some PSP and often used by advanced risk management.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets delivery_email
     *
     * @return string
     */
    public function getDeliveryEmail()
    {
        return $this->container['delivery_email'];
    }

    /**
     * Sets delivery_email
     *
     * @param string $delivery_email Customer delivery e-mail address. Represents email for electronic delivery for cases when it's not the same as customer's email. If not provided, `customer.email` will be used.
     *
     * @return $this
     */
    public function setDeliveryEmail($delivery_email)
    {
        $this->container['delivery_email'] = $delivery_email;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param \DateTime $birthday Customer birthday. Required by some PSPs and important for payments with advanced risk management.
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender Customer gender. Required by some PSPs.
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Optile\Model\Name
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Optile\Model\Name $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \Optile\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Optile\Model\Company $company Information about company. Required by some PSPs when customer is a business.
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Optile\Model\CustomerAddresses
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Optile\Model\CustomerAddresses $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \Optile\Model\Phones
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \Optile\Model\Phones $phones phones
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets registration
     *
     * @return \Optile\Model\Registration
     */
    public function getRegistration()
    {
        return $this->container['registration'];
    }

    /**
     * Sets registration
     *
     * @param \Optile\Model\Registration $registration Information about customer registration in OPG.
     *
     * @return $this
     */
    public function setRegistration($registration)
    {
        $this->container['registration'] = $registration;

        return $this;
    }

    /**
     * Gets identities
     *
     * @return \Optile\Model\Identities
     */
    public function getIdentities()
    {
        return $this->container['identities'];
    }

    /**
     * Sets identities
     *
     * @param \Optile\Model\Identities $identities identities
     *
     * @return $this
     */
    public function setIdentities($identities)
    {
        $this->container['identities'] = $identities;

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

