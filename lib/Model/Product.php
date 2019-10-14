<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'name' => 'string',
        'amount' => 'double',
        'net_amount' => 'double',
        'tax_amount' => 'double',
        'tax_rate_percentage' => 'double',
        'currency' => 'string',
        'quantity' => 'int',
        'planned_shipping_date' => '\DateTime',
        'product_description_url' => 'string',
        'product_image_url' => 'string',
        'description' => 'string',
        'shipping_address_id' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'name' => null,
        'amount' => 'double',
        'net_amount' => 'double',
        'tax_amount' => 'double',
        'tax_rate_percentage' => 'double',
        'currency' => null,
        'quantity' => 'int32',
        'planned_shipping_date' => 'date-time',
        'product_description_url' => 'uri',
        'product_image_url' => 'uri',
        'description' => null,
        'shipping_address_id' => null,
        'type' => null
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
        'name' => 'name',
        'amount' => 'amount',
        'net_amount' => 'netAmount',
        'tax_amount' => 'taxAmount',
        'tax_rate_percentage' => 'taxRatePercentage',
        'currency' => 'currency',
        'quantity' => 'quantity',
        'planned_shipping_date' => 'plannedShippingDate',
        'product_description_url' => 'productDescriptionUrl',
        'product_image_url' => 'productImageUrl',
        'description' => 'description',
        'shipping_address_id' => 'shippingAddressId',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'amount' => 'setAmount',
        'net_amount' => 'setNetAmount',
        'tax_amount' => 'setTaxAmount',
        'tax_rate_percentage' => 'setTaxRatePercentage',
        'currency' => 'setCurrency',
        'quantity' => 'setQuantity',
        'planned_shipping_date' => 'setPlannedShippingDate',
        'product_description_url' => 'setProductDescriptionUrl',
        'product_image_url' => 'setProductImageUrl',
        'description' => 'setDescription',
        'shipping_address_id' => 'setShippingAddressId',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'amount' => 'getAmount',
        'net_amount' => 'getNetAmount',
        'tax_amount' => 'getTaxAmount',
        'tax_rate_percentage' => 'getTaxRatePercentage',
        'currency' => 'getCurrency',
        'quantity' => 'getQuantity',
        'planned_shipping_date' => 'getPlannedShippingDate',
        'product_description_url' => 'getProductDescriptionUrl',
        'product_image_url' => 'getProductImageUrl',
        'description' => 'getDescription',
        'shipping_address_id' => 'getShippingAddressId',
        'type' => 'getType'
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

    const TYPE_PHYSICAL = 'PHYSICAL';
    const TYPE_DIGITAL = 'DIGITAL';
    const TYPE_SERVICE = 'SERVICE';
    const TYPE_TAX = 'TAX';
    const TYPE_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PHYSICAL,
            self::TYPE_DIGITAL,
            self::TYPE_SERVICE,
            self::TYPE_TAX,
            self::TYPE_OTHER,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['net_amount'] = isset($data['net_amount']) ? $data['net_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_rate_percentage'] = isset($data['tax_rate_percentage']) ? $data['tax_rate_percentage'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['planned_shipping_date'] = isset($data['planned_shipping_date']) ? $data['planned_shipping_date'] : null;
        $this->container['product_description_url'] = isset($data['product_description_url']) ? $data['product_description_url'] : null;
        $this->container['product_image_url'] = isset($data['product_image_url']) ? $data['product_image_url'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['shipping_address_id'] = isset($data['shipping_address_id']) ? $data['shipping_address_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @param string $code Identifier for this product given by the merchant. Not validated for uniqueness by OPG. May appear on customer invoice.
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Human readable name of this product. May appear on customer invoice.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Total price of this product record with respect to `quantity` field. For example, if single item of product costs `10.00` and `quantity` indicates `2` items in this product record, the value of this field must be `20.00`.  The sum of all product amounts should match the `amount` field in `payment` object.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets net_amount
     *
     * @return double
     */
    public function getNetAmount()
    {
        return $this->container['net_amount'];
    }

    /**
     * Sets net_amount
     *
     * @param double $net_amount Total net price of this product record with respect to the `quantity` field. For example, if single item of product costs `10.00` and `quantity` indicates `2` items in this product record, the value of this field must be `20.00`.
     *
     * @return $this
     */
    public function setNetAmount($net_amount)
    {
        $this->container['net_amount'] = $net_amount;

        return $this;
    }

    /**
     * Gets tax_amount
     *
     * @return double
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double $tax_amount Total tax amount (e.g. VAT amount) of this product record.
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }

    /**
     * Gets tax_rate_percentage
     *
     * @return double
     */
    public function getTaxRatePercentage()
    {
        return $this->container['tax_rate_percentage'];
    }

    /**
     * Sets tax_rate_percentage
     *
     * @param double $tax_rate_percentage Tax rate percentage (e.g. VAT tax rate) for this product record.
     *
     * @return $this
     */
    public function setTaxRatePercentage($tax_rate_percentage)
    {
        $this->container['tax_rate_percentage'] = $tax_rate_percentage;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency Currency of the `amount` field. Value format is according to ISO-4217 form, e.g. \"EUR\", \"USD\". If undefined the currency will be taken from `payment` object.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Product quantity. By default is `1`.
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets planned_shipping_date
     *
     * @return \DateTime
     */
    public function getPlannedShippingDate()
    {
        return $this->container['planned_shipping_date'];
    }

    /**
     * Sets planned_shipping_date
     *
     * @param \DateTime $planned_shipping_date Date (or time stamp) of planned shipment for this product record.
     *
     * @return $this
     */
    public function setPlannedShippingDate($planned_shipping_date)
    {
        $this->container['planned_shipping_date'] = $planned_shipping_date;

        return $this;
    }

    /**
     * Gets product_description_url
     *
     * @return string
     */
    public function getProductDescriptionUrl()
    {
        return $this->container['product_description_url'];
    }

    /**
     * Sets product_description_url
     *
     * @param string $product_description_url URL to product description page. This URL can be used by PSP to build an order-friendly payment page during checkout or during future communication with customer about this order or product.
     *
     * @return $this
     */
    public function setProductDescriptionUrl($product_description_url)
    {
        $this->container['product_description_url'] = $product_description_url;

        return $this;
    }

    /**
     * Gets product_image_url
     *
     * @return string
     */
    public function getProductImageUrl()
    {
        return $this->container['product_image_url'];
    }

    /**
     * Sets product_image_url
     *
     * @param string $product_image_url URL to product image. This URL can be used by PSP to build an order-friendly payment page during checkout or during future communication with customer about this order or product.
     *
     * @return $this
     */
    public function setProductImageUrl($product_image_url)
    {
        $this->container['product_image_url'] = $product_image_url;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Product description in free form (no markup supported).
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets shipping_address_id
     *
     * @return string
     */
    public function getShippingAddressId()
    {
        return $this->container['shipping_address_id'];
    }

    /**
     * Sets shipping_address_id
     *
     * @param string $shipping_address_id Shipping address ID to deliver this product to. If undefined, the product is delivered to the address described by `customer.addresses.shipping` property.
     *
     * @return $this
     */
    public function setShippingAddressId($shipping_address_id)
    {
        $this->container['shipping_address_id'] = $shipping_address_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Defines a type of the product:   * `PHYSICAL` - Physical product   * `DIGITAL` - Digital product   * `SERVICE` - Service   * `TAX` - The type which should be used in the case when the tax information about shopping card should be provided as a separate order line (common case for USA market)   * `OTHER` - Other types not listed above
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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


