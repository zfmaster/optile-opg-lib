<?php
/**
 * Status
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
 * Status Class Doc Comment
 *
 * @category Class
 * @package  Optile
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Status implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'reason' => null
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
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'reason' => 'getReason'
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

    const CODE_PENDING = 'pending';
    const CODE_FAILED = 'failed';
    const CODE_DECLINED = 'declined';
    const CODE_ABORTED = 'aborted';
    const CODE_EXPIRED = 'expired';
    const CODE_CANCELED = 'canceled';
    const CODE_LISTED = 'listed';
    const CODE_PREAUTHORIZED = 'preauthorized';
    const CODE_CHARGED = 'charged';
    const CODE_PAID_OUT = 'paid_out';
    const CODE_APPROVAL_REQUESTED = 'approval_requested';
    const CODE_CHARGED_BACK = 'charged_back';
    const CODE_INFORMATION_REQUESTED = 'information_requested';
    const CODE_DISPUTE_CLOSED = 'dispute_closed';
    const CODE_DEPLEATED = 'depleated';
    const CODE_REGISTERED = 'registered';
    const CODE_DEREGISTERED = 'deregistered';
    const CODE_SUBSCRIBED = 'subscribed';
    const CODE_UNSUBSCRIBED = 'unsubscribed';
    const CODE_USED = 'used';
    const CODE_REJECTED = 'rejected';
    const CODE_ACTIVATED = 'activated';
    const CODE_FUNCTIONING = 'functioning';
    const CODE_ENDED = 'ended';
    const REASON_CHARGE_REQUESTED = 'charge_requested';
    const REASON_PROCESSING_SCHEDULED = 'processing_scheduled';
    const REASON_PROCESSING_PAUSED = 'processing_paused';
    const REASON_DEBIT_REQUESTED = 'debit_requested';
    const REASON_DEBITED = 'debited';
    const REASON_DEBITED_PARTIAL = 'debited_partial';
    const REASON_DEBIT_FAILED = 'debit_failed';
    const REASON_DEBIT_DECLINED = 'debit_declined';
    const REASON_DEBIT_ABORTED = 'debit_aborted';
    const REASON_DEBIT_CANCELED = 'debit_canceled';
    const REASON_DEBIT_REJECTED = 'debit_rejected';
    const REASON_INFORMATION_REQUESTED = 'information_requested';
    const REASON_CHARGED_BACK = 'charged_back';
    const REASON_DISPUTE_CLOSED = 'dispute_closed';
    const REASON_CHARGEBACK_CANCELED = 'chargeback_canceled';
    const REASON_NOTIFICATION_OF_CHARGEBACK = 'notification_of_chargeback';
    const REASON_INFORMATION2_REQUESTED = 'information2_requested';
    const REASON_CHARGED_BACK2 = 'charged_back2';
    const REASON_DISPUTE2_CLOSED = 'dispute2_closed';
    const REASON_CHARGEBACK2_CANCELED = 'chargeback2_canceled';
    const REASON_NOTIFICATION_OF_CHARGEBACK2 = 'notification_of_chargeback2';
    const REASON_CANCELATION_REQUESTED = 'cancelation_requested';
    const REASON_CANCELATION_FAILED = 'cancelation_failed';
    const REASON_CANCELATION_DECLINED = 'cancelation_declined';
    const REASON_CANCELATION_CANCELED = 'cancelation_canceled';
    const REASON_CANCELATION_REJECTED = 'cancelation_rejected';
    const REASON_PREAUTHORIZATION_REQUESTED = 'preauthorization_requested';
    const REASON_PREAUTHORIZED = 'preauthorized';
    const REASON_PREAUTHORIZATION_FAILED = 'preauthorization_failed';
    const REASON_PREAUTHORIZATION_DECLINED = 'preauthorization_declined';
    const REASON_PREAUTHORIZATION_ABORTED = 'preauthorization_aborted';
    const REASON_PREAUTHORIZATION_EXPIRED = 'preauthorization_expired';
    const REASON_PREAUTHORIZATION_DEPLETED = 'preauthorization_depleted';
    const REASON_PREAUTHORIZATION_CANCELED = 'preauthorization_canceled';
    const REASON_PREAUTHORIZATION_REJECTED = 'preauthorization_rejected';
    const REASON_CLOSED = 'closed';
    const REASON_CLOSED_PARTIAL = 'closed_partial';
    const REASON_PAYMENT_DEMAND_REQUESTED = 'payment_demand_requested';
    const REASON_PAYMENT_DEMANDED = 'payment_demanded';
    const REASON_PAYMENT_DEMAND_FAILED = 'payment_demand_failed';
    const REASON_PAYMENT_DEMAND_DECLINED = 'payment_demand_declined';
    const REASON_PAYMENT_DEMAND_ABORTED = 'payment_demand_aborted';
    const REASON_PAYMENT_DEMAND_CANCELED = 'payment_demand_canceled';
    const REASON_PAYMENT_DEMAND_REJECTED = 'payment_demand_rejected';
    const REASON_PREORDER_REQUESTED = 'preorder_requested';
    const REASON_PREORDER_ABORTED = 'preorder_aborted';
    const REASON_PREORDER_ISSUED = 'preorder_issued';
    const REASON_PREORDER_FAILED = 'preorder_failed';
    const REASON_PREORDER_DECLINED = 'preorder_declined';
    const REASON_PREORDER_CANCELED = 'preorder_canceled';
    const REASON_PREORDER_REJECTED = 'preorder_rejected';
    const REASON_PAYMENT_RECEIVED = 'payment_received';
    const REASON_RECEIPT_CANCELED = 'receipt_canceled';
    const REASON_REQUEST_EXPIRED = 'request_expired';
    const REASON_RETRY_SCHEDULED = 'retry_scheduled';
    const REASON_PAYOUT_REQUESTED = 'payout_requested';
    const REASON_CREDIT_REQUESTED = 'credit_requested';
    const REASON_CREDITED = 'credited';
    const REASON_CREDITED_PARTIAL = 'credited_partial';
    const REASON_CREDIT_FAILED = 'credit_failed';
    const REASON_CREDIT_DECLINED = 'credit_declined';
    const REASON_CREDIT_CANCELED = 'credit_canceled';
    const REASON_CREDIT_REJECTED = 'credit_rejected';
    const REASON_CREDIT_APPROVAL_REQUESTED = 'credit_approval_requested';
    const REASON_CREDIT_APPROVAL_DECLINED = 'credit_approval_declined';
    const REASON_CREDIT_APPROVAL_FAILED = 'credit_approval_failed';
    const REASON_CREDIT_APPROVAL_CANCELED = 'credit_approval_canceled';
    const REASON_CREDIT_APPROVAL_REJECTED = 'credit_approval_rejected';
    const REASON_REFUND_REQUESTED = 'refund_requested';
    const REASON_REFUND_CREDITED = 'refund_credited';
    const REASON_REFUND_CREDITED_PARTIAL = 'refund_credited_partial';
    const REASON_REFUND_FAILED = 'refund_failed';
    const REASON_REFUND_DECLINED = 'refund_declined';
    const REASON_REFUND_CANCELED = 'refund_canceled';
    const REASON_REFUND_REJECTED = 'refund_rejected';
    const REASON_REFUND_APPROVAL_REQUESTED = 'refund_approval_requested';
    const REASON_REFUND_APPROVAL_DECLINED = 'refund_approval_declined';
    const REASON_REFUND_APPROVAL_FAILED = 'refund_approval_failed';
    const REASON_REFUND_APPROVAL_CANCELED = 'refund_approval_canceled';
    const REASON_REFUND_APPROVAL_REJECTED = 'refund_approval_rejected';
    const REASON_REGISTERED = 'registered';
    const REASON_REGISTRATION_REQUESTED = 'registration_requested';
    const REASON_REGISTRATION_FAILED = 'registration_failed';
    const REASON_REGISTRATION_DECLINED = 'registration_declined';
    const REASON_REGISTRATION_ABORTED = 'registration_aborted';
    const REASON_REGISTRATION_EXPIRED = 'registration_expired';
    const REASON_REGISTRATION_CANCELED = 'registration_canceled';
    const REASON_REGISTRATION_REJECTED = 'registration_rejected';
    const REASON_DEREGISTRATION_REQUESTED = 'deregistration_requested';
    const REASON_DEREGISTERED = 'deregistered';
    const REASON_LISTED = 'listed';
    const REASON_LIST_EXPIRED = 'list_expired';
    const REASON_LIST_FAILED = 'list_failed';
    const REASON_LIST_ABORTED = 'list_aborted';
    const REASON_LIST_CANCELED = 'list_canceled';
    const REASON_LIST_REJECTED = 'list_rejected';
    const REASON_LIST_USED = 'list_used';
    const REASON_SUBSCRIPTION_CREATED = 'subscription_created';
    const REASON_SUBSCRIPTION_UPDATED = 'subscription_updated';
    const REASON_SUBSCRIPTION_CANCELED = 'subscription_canceled';
    const REASON_SUBSCRIPTION_CREATION_FAILED = 'subscription_creation_failed';
    const REASON_SUBSCRIPTION_UPDATE_FAILED = 'subscription_update_failed';
    const REASON_SUBSCRIPTION_CANCELATION_FAILED = 'subscription_cancelation_failed';
    const REASON_ENTITLEMENT_CREATED = 'entitlement_created';
    const REASON_ENTITLEMENT_CREATION_FAILED = 'entitlement_creation_failed';
    const REASON_ENTITLEMENT_UPDATED = 'entitlement_updated';
    const REASON_ENTITLEMENT_UPDATE_FAILED = 'entitlement_update_failed';
    const REASON_ENTITLEMENT_CANCELED = 'entitlement_canceled';
    const REASON_ENTITLEMENT_CANCELATION_FAILED = 'entitlement_cancelation_failed';
    const REASON_ACTIVATION_FAILED = 'activation_failed';
    const REASON_CALCULATION_REQUESTED = 'calculation_requested';
    const REASON_CALCULATED = 'calculated';
    const REASON_CALCULATION_USED = 'calculation_used';
    const REASON_CALCULATION_REJECTED = 'calculation_rejected';
    const REASON_CALCULATION_FAILED = 'calculation_failed';
    const REASON_CALCULATION_DECLINED = 'calculation_declined';
    const REASON_CALCULATION_CANCELED = 'calculation_canceled';
    const REASON_CALCULATION_EXPIRED = 'calculation_expired';
    const REASON_PRESET_REQUESTED = 'preset_requested';
    const REASON_PRESET = 'preset';
    const REASON_PRESET_USED = 'preset_used';
    const REASON_PRESET_REJECTED = 'preset_rejected';
    const REASON_PRESET_FAILED = 'preset_failed';
    const REASON_PRESET_ABORTED = 'preset_aborted';
    const REASON_PRESET_DECLINED = 'preset_declined';
    const REASON_PRESET_CANCELED = 'preset_canceled';
    const REASON_PRESET_EXPIRED = 'preset_expired';
    const REASON_STARTED = 'started';
    const REASON_FUNCTIONING = 'functioning';
    const REASON_ENDED = 'ended';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_PENDING,
            self::CODE_FAILED,
            self::CODE_DECLINED,
            self::CODE_ABORTED,
            self::CODE_EXPIRED,
            self::CODE_CANCELED,
            self::CODE_LISTED,
            self::CODE_PREAUTHORIZED,
            self::CODE_CHARGED,
            self::CODE_PAID_OUT,
            self::CODE_APPROVAL_REQUESTED,
            self::CODE_CHARGED_BACK,
            self::CODE_INFORMATION_REQUESTED,
            self::CODE_DISPUTE_CLOSED,
            self::CODE_DEPLEATED,
            self::CODE_REGISTERED,
            self::CODE_DEREGISTERED,
            self::CODE_SUBSCRIBED,
            self::CODE_UNSUBSCRIBED,
            self::CODE_USED,
            self::CODE_REJECTED,
            self::CODE_ACTIVATED,
            self::CODE_FUNCTIONING,
            self::CODE_ENDED,
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
            self::REASON_CHARGE_REQUESTED,
            self::REASON_PROCESSING_SCHEDULED,
            self::REASON_PROCESSING_PAUSED,
            self::REASON_DEBIT_REQUESTED,
            self::REASON_DEBITED,
            self::REASON_DEBITED_PARTIAL,
            self::REASON_DEBIT_FAILED,
            self::REASON_DEBIT_DECLINED,
            self::REASON_DEBIT_ABORTED,
            self::REASON_DEBIT_CANCELED,
            self::REASON_DEBIT_REJECTED,
            self::REASON_INFORMATION_REQUESTED,
            self::REASON_CHARGED_BACK,
            self::REASON_DISPUTE_CLOSED,
            self::REASON_CHARGEBACK_CANCELED,
            self::REASON_NOTIFICATION_OF_CHARGEBACK,
            self::REASON_INFORMATION2_REQUESTED,
            self::REASON_CHARGED_BACK2,
            self::REASON_DISPUTE2_CLOSED,
            self::REASON_CHARGEBACK2_CANCELED,
            self::REASON_NOTIFICATION_OF_CHARGEBACK2,
            self::REASON_CANCELATION_REQUESTED,
            self::REASON_CANCELATION_FAILED,
            self::REASON_CANCELATION_DECLINED,
            self::REASON_CANCELATION_CANCELED,
            self::REASON_CANCELATION_REJECTED,
            self::REASON_PREAUTHORIZATION_REQUESTED,
            self::REASON_PREAUTHORIZED,
            self::REASON_PREAUTHORIZATION_FAILED,
            self::REASON_PREAUTHORIZATION_DECLINED,
            self::REASON_PREAUTHORIZATION_ABORTED,
            self::REASON_PREAUTHORIZATION_EXPIRED,
            self::REASON_PREAUTHORIZATION_DEPLETED,
            self::REASON_PREAUTHORIZATION_CANCELED,
            self::REASON_PREAUTHORIZATION_REJECTED,
            self::REASON_CLOSED,
            self::REASON_CLOSED_PARTIAL,
            self::REASON_PAYMENT_DEMAND_REQUESTED,
            self::REASON_PAYMENT_DEMANDED,
            self::REASON_PAYMENT_DEMAND_FAILED,
            self::REASON_PAYMENT_DEMAND_DECLINED,
            self::REASON_PAYMENT_DEMAND_ABORTED,
            self::REASON_PAYMENT_DEMAND_CANCELED,
            self::REASON_PAYMENT_DEMAND_REJECTED,
            self::REASON_PREORDER_REQUESTED,
            self::REASON_PREORDER_ABORTED,
            self::REASON_PREORDER_ISSUED,
            self::REASON_PREORDER_FAILED,
            self::REASON_PREORDER_DECLINED,
            self::REASON_PREORDER_CANCELED,
            self::REASON_PREORDER_REJECTED,
            self::REASON_PAYMENT_RECEIVED,
            self::REASON_RECEIPT_CANCELED,
            self::REASON_REQUEST_EXPIRED,
            self::REASON_RETRY_SCHEDULED,
            self::REASON_PAYOUT_REQUESTED,
            self::REASON_CREDIT_REQUESTED,
            self::REASON_CREDITED,
            self::REASON_CREDITED_PARTIAL,
            self::REASON_CREDIT_FAILED,
            self::REASON_CREDIT_DECLINED,
            self::REASON_CREDIT_CANCELED,
            self::REASON_CREDIT_REJECTED,
            self::REASON_CREDIT_APPROVAL_REQUESTED,
            self::REASON_CREDIT_APPROVAL_DECLINED,
            self::REASON_CREDIT_APPROVAL_FAILED,
            self::REASON_CREDIT_APPROVAL_CANCELED,
            self::REASON_CREDIT_APPROVAL_REJECTED,
            self::REASON_REFUND_REQUESTED,
            self::REASON_REFUND_CREDITED,
            self::REASON_REFUND_CREDITED_PARTIAL,
            self::REASON_REFUND_FAILED,
            self::REASON_REFUND_DECLINED,
            self::REASON_REFUND_CANCELED,
            self::REASON_REFUND_REJECTED,
            self::REASON_REFUND_APPROVAL_REQUESTED,
            self::REASON_REFUND_APPROVAL_DECLINED,
            self::REASON_REFUND_APPROVAL_FAILED,
            self::REASON_REFUND_APPROVAL_CANCELED,
            self::REASON_REFUND_APPROVAL_REJECTED,
            self::REASON_REGISTERED,
            self::REASON_REGISTRATION_REQUESTED,
            self::REASON_REGISTRATION_FAILED,
            self::REASON_REGISTRATION_DECLINED,
            self::REASON_REGISTRATION_ABORTED,
            self::REASON_REGISTRATION_EXPIRED,
            self::REASON_REGISTRATION_CANCELED,
            self::REASON_REGISTRATION_REJECTED,
            self::REASON_DEREGISTRATION_REQUESTED,
            self::REASON_DEREGISTERED,
            self::REASON_LISTED,
            self::REASON_LIST_EXPIRED,
            self::REASON_LIST_FAILED,
            self::REASON_LIST_ABORTED,
            self::REASON_LIST_CANCELED,
            self::REASON_LIST_REJECTED,
            self::REASON_LIST_USED,
            self::REASON_SUBSCRIPTION_CREATED,
            self::REASON_SUBSCRIPTION_UPDATED,
            self::REASON_SUBSCRIPTION_CANCELED,
            self::REASON_SUBSCRIPTION_CREATION_FAILED,
            self::REASON_SUBSCRIPTION_UPDATE_FAILED,
            self::REASON_SUBSCRIPTION_CANCELATION_FAILED,
            self::REASON_ENTITLEMENT_CREATED,
            self::REASON_ENTITLEMENT_CREATION_FAILED,
            self::REASON_ENTITLEMENT_UPDATED,
            self::REASON_ENTITLEMENT_UPDATE_FAILED,
            self::REASON_ENTITLEMENT_CANCELED,
            self::REASON_ENTITLEMENT_CANCELATION_FAILED,
            self::REASON_ACTIVATION_FAILED,
            self::REASON_CALCULATION_REQUESTED,
            self::REASON_CALCULATED,
            self::REASON_CALCULATION_USED,
            self::REASON_CALCULATION_REJECTED,
            self::REASON_CALCULATION_FAILED,
            self::REASON_CALCULATION_DECLINED,
            self::REASON_CALCULATION_CANCELED,
            self::REASON_CALCULATION_EXPIRED,
            self::REASON_PRESET_REQUESTED,
            self::REASON_PRESET,
            self::REASON_PRESET_USED,
            self::REASON_PRESET_REJECTED,
            self::REASON_PRESET_FAILED,
            self::REASON_PRESET_ABORTED,
            self::REASON_PRESET_DECLINED,
            self::REASON_PRESET_CANCELED,
            self::REASON_PRESET_EXPIRED,
            self::REASON_STARTED,
            self::REASON_FUNCTIONING,
            self::REASON_ENDED,
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
     * @param string $code Status code describes operation current state. See list of all [Status Codes](https://www.optile.io/opg#285186).
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
     * @param string $reason Reason of this status, complements status code and has more detailed granularity. See list of all [Status Codes](https://www.optile.io/opg#285186).
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


