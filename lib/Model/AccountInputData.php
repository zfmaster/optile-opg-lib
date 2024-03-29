<?php
/**
 * AccountInputData
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
 * AccountInputData Class Doc Comment
 *
 * @category Class
 * @description Customer account data. Presence of account fields depends on a selected payment network.
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountInputData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountInputData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'holder_name' => 'string',
        'number' => 'string',
        'bank_code' => 'string',
        'bank_name' => 'string',
        'bic' => 'string',
        'branch' => 'string',
        'city' => 'string',
        'expiry_month' => 'string',
        'expiry_year' => 'string',
        'iban' => 'string',
        'login' => 'string',
        'opt_in' => 'bool',
        'password' => 'string',
        'verification_code' => 'string',
        'customer_birth_day' => 'string',
        'customer_birth_month' => 'string',
        'customer_birth_year' => 'string',
        'installment_plan_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'holder_name' => null,
        'number' => null,
        'bank_code' => null,
        'bank_name' => null,
        'bic' => null,
        'branch' => null,
        'city' => null,
        'expiry_month' => null,
        'expiry_year' => null,
        'iban' => null,
        'login' => null,
        'opt_in' => null,
        'password' => null,
        'verification_code' => null,
        'customer_birth_day' => null,
        'customer_birth_month' => null,
        'customer_birth_year' => null,
        'installment_plan_id' => null
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
        'holder_name' => 'holderName',
        'number' => 'number',
        'bank_code' => 'bankCode',
        'bank_name' => 'bankName',
        'bic' => 'bic',
        'branch' => 'branch',
        'city' => 'city',
        'expiry_month' => 'expiryMonth',
        'expiry_year' => 'expiryYear',
        'iban' => 'iban',
        'login' => 'login',
        'opt_in' => 'optIn',
        'password' => 'password',
        'verification_code' => 'verificationCode',
        'customer_birth_day' => 'customerBirthDay',
        'customer_birth_month' => 'customerBirthMonth',
        'customer_birth_year' => 'customerBirthYear',
        'installment_plan_id' => 'installmentPlanId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'holder_name' => 'setHolderName',
        'number' => 'setNumber',
        'bank_code' => 'setBankCode',
        'bank_name' => 'setBankName',
        'bic' => 'setBic',
        'branch' => 'setBranch',
        'city' => 'setCity',
        'expiry_month' => 'setExpiryMonth',
        'expiry_year' => 'setExpiryYear',
        'iban' => 'setIban',
        'login' => 'setLogin',
        'opt_in' => 'setOptIn',
        'password' => 'setPassword',
        'verification_code' => 'setVerificationCode',
        'customer_birth_day' => 'setCustomerBirthDay',
        'customer_birth_month' => 'setCustomerBirthMonth',
        'customer_birth_year' => 'setCustomerBirthYear',
        'installment_plan_id' => 'setInstallmentPlanId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'holder_name' => 'getHolderName',
        'number' => 'getNumber',
        'bank_code' => 'getBankCode',
        'bank_name' => 'getBankName',
        'bic' => 'getBic',
        'branch' => 'getBranch',
        'city' => 'getCity',
        'expiry_month' => 'getExpiryMonth',
        'expiry_year' => 'getExpiryYear',
        'iban' => 'getIban',
        'login' => 'getLogin',
        'opt_in' => 'getOptIn',
        'password' => 'getPassword',
        'verification_code' => 'getVerificationCode',
        'customer_birth_day' => 'getCustomerBirthDay',
        'customer_birth_month' => 'getCustomerBirthMonth',
        'customer_birth_year' => 'getCustomerBirthYear',
        'installment_plan_id' => 'getInstallmentPlanId'
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
        $this->container['holder_name'] = isset($data['holder_name']) ? $data['holder_name'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['bank_code'] = isset($data['bank_code']) ? $data['bank_code'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['expiry_month'] = isset($data['expiry_month']) ? $data['expiry_month'] : null;
        $this->container['expiry_year'] = isset($data['expiry_year']) ? $data['expiry_year'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['login'] = isset($data['login']) ? $data['login'] : null;
        $this->container['opt_in'] = isset($data['opt_in']) ? $data['opt_in'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['verification_code'] = isset($data['verification_code']) ? $data['verification_code'] : null;
        $this->container['customer_birth_day'] = isset($data['customer_birth_day']) ? $data['customer_birth_day'] : null;
        $this->container['customer_birth_month'] = isset($data['customer_birth_month']) ? $data['customer_birth_month'] : null;
        $this->container['customer_birth_year'] = isset($data['customer_birth_year']) ? $data['customer_birth_year'] : null;
        $this->container['installment_plan_id'] = isset($data['installment_plan_id']) ? $data['installment_plan_id'] : null;
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
     * Gets holder_name
     *
     * @return string
     */
    public function getHolderName()
    {
        return $this->container['holder_name'];
    }

    /**
     * Sets holder_name
     *
     * @param string $holder_name Account holder name.
     *
     * @return $this
     */
    public function setHolderName($holder_name)
    {
        $this->container['holder_name'] = $holder_name;

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
     * @param string $number Account number (bank account number, credit card number, etc.).
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets bank_code
     *
     * @return string
     */
    public function getBankCode()
    {
        return $this->container['bank_code'];
    }

    /**
     * Sets bank_code
     *
     * @param string $bank_code Bank code.
     *
     * @return $this
     */
    public function setBankCode($bank_code)
    {
        $this->container['bank_code'] = $bank_code;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name Bank name.
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic BIC code.
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return string
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param string $branch Bank branch name.
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city Bank city or any other account related city.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets expiry_month
     *
     * @return string
     */
    public function getExpiryMonth()
    {
        return $this->container['expiry_month'];
    }

    /**
     * Sets expiry_month
     *
     * @param string $expiry_month Account expiry month (credit/debit cards).
     *
     * @return $this
     */
    public function setExpiryMonth($expiry_month)
    {
        $this->container['expiry_month'] = $expiry_month;

        return $this;
    }

    /**
     * Gets expiry_year
     *
     * @return string
     */
    public function getExpiryYear()
    {
        return $this->container['expiry_year'];
    }

    /**
     * Sets expiry_year
     *
     * @param string $expiry_year Account expiry year (credit/debit cards).
     *
     * @return $this
     */
    public function setExpiryYear($expiry_year)
    {
        $this->container['expiry_year'] = $expiry_year;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban IBAN number.
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->container['login'];
    }

    /**
     * Sets login
     *
     * @param string $login Account login name.
     *
     * @return $this
     */
    public function setLogin($login)
    {
        $this->container['login'] = $login;

        return $this;
    }

    /**
     * Gets opt_in
     *
     * @return bool
     */
    public function getOptIn()
    {
        return $this->container['opt_in'];
    }

    /**
     * Sets opt_in
     *
     * @param bool $opt_in Indicates whether customer is agreed to opt-in or not.
     *
     * @return $this
     */
    public function setOptIn($opt_in)
    {
        $this->container['opt_in'] = $opt_in;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password Account password.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets verification_code
     *
     * @return string
     */
    public function getVerificationCode()
    {
        return $this->container['verification_code'];
    }

    /**
     * Sets verification_code
     *
     * @param string $verification_code Account verification code (CVC, CVV, CID in case of different credit cards).
     *
     * @return $this
     */
    public function setVerificationCode($verification_code)
    {
        $this->container['verification_code'] = $verification_code;

        return $this;
    }

    /**
     * Gets customer_birth_day
     *
     * @return string
     */
    public function getCustomerBirthDay()
    {
        return $this->container['customer_birth_day'];
    }

    /**
     * Sets customer_birth_day
     *
     * @param string $customer_birth_day Day of customer birthday.
     *
     * @return $this
     */
    public function setCustomerBirthDay($customer_birth_day)
    {
        $this->container['customer_birth_day'] = $customer_birth_day;

        return $this;
    }

    /**
     * Gets customer_birth_month
     *
     * @return string
     */
    public function getCustomerBirthMonth()
    {
        return $this->container['customer_birth_month'];
    }

    /**
     * Sets customer_birth_month
     *
     * @param string $customer_birth_month Month of customer birthday.
     *
     * @return $this
     */
    public function setCustomerBirthMonth($customer_birth_month)
    {
        $this->container['customer_birth_month'] = $customer_birth_month;

        return $this;
    }

    /**
     * Gets customer_birth_year
     *
     * @return string
     */
    public function getCustomerBirthYear()
    {
        return $this->container['customer_birth_year'];
    }

    /**
     * Sets customer_birth_year
     *
     * @param string $customer_birth_year Year of customer birthday.
     *
     * @return $this
     */
    public function setCustomerBirthYear($customer_birth_year)
    {
        $this->container['customer_birth_year'] = $customer_birth_year;

        return $this;
    }

    /**
     * Gets installment_plan_id
     *
     * @return string
     */
    public function getInstallmentPlanId()
    {
        return $this->container['installment_plan_id'];
    }

    /**
     * Sets installment_plan_id
     *
     * @param string $installment_plan_id ID of chosen installment plan.
     *
     * @return $this
     */
    public function setInstallmentPlanId($installment_plan_id)
    {
        $this->container['installment_plan_id'] = $installment_plan_id;

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


