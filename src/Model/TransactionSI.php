<?php
/**
 * TransactionSI
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  Teambank\RatenkaufByEasyCreditApiV3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Transaction-V3 API Definition
 *
 * Transaction-V3 API for Merchant Portal
 *
 * The version of the OpenAPI document: V3.84.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0-SNAPSHOT
 */
/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Teambank\RatenkaufByEasyCreditApiV3\Model;

use \ArrayAccess;
use \Teambank\RatenkaufByEasyCreditApiV3\ObjectSerializer;

/**
 * TransactionSI Class Doc Comment
 *
 * @category Class
 * @package  Teambank\RatenkaufByEasyCreditApiV3
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionSI implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionSI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'financingTerm' => 'int',
        'orderDetails' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\OrderDetails',
        'shopsystem' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\Shopsystem',
        'customer' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\Customer',
        'customerRelationship' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\CustomerRelationship',
        'redirectLinks' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\RedirectLinks',
        'consent' => '\Teambank\RatenkaufByEasyCreditApiV3\Model\Consent',
        'deviceIdentToken' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'financingTerm' => null,
        'orderDetails' => null,
        'shopsystem' => null,
        'customer' => null,
        'customerRelationship' => null,
        'redirectLinks' => null,
        'consent' => null,
        'deviceIdentToken' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'financingTerm' => 'financingTerm',
        'orderDetails' => 'orderDetails',
        'shopsystem' => 'shopsystem',
        'customer' => 'customer',
        'customerRelationship' => 'customerRelationship',
        'redirectLinks' => 'redirectLinks',
        'consent' => 'consent',
        'deviceIdentToken' => 'deviceIdentToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'financingTerm' => 'setFinancingTerm',
        'orderDetails' => 'setOrderDetails',
        'shopsystem' => 'setShopsystem',
        'customer' => 'setCustomer',
        'customerRelationship' => 'setCustomerRelationship',
        'redirectLinks' => 'setRedirectLinks',
        'consent' => 'setConsent',
        'deviceIdentToken' => 'setDeviceIdentToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'financingTerm' => 'getFinancingTerm',
        'orderDetails' => 'getOrderDetails',
        'shopsystem' => 'getShopsystem',
        'customer' => 'getCustomer',
        'customerRelationship' => 'getCustomerRelationship',
        'redirectLinks' => 'getRedirectLinks',
        'consent' => 'getConsent',
        'deviceIdentToken' => 'getDeviceIdentToken'
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
        return self::$openAPIModelName;
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
        $this->container['financingTerm'] = isset($data['financingTerm']) ? $data['financingTerm'] : null;
        $this->container['orderDetails'] = isset($data['orderDetails']) ? $data['orderDetails'] : null;
        $this->container['shopsystem'] = isset($data['shopsystem']) ? $data['shopsystem'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['customerRelationship'] = isset($data['customerRelationship']) ? $data['customerRelationship'] : null;
        $this->container['redirectLinks'] = isset($data['redirectLinks']) ? $data['redirectLinks'] : null;
        $this->container['consent'] = isset($data['consent']) ? $data['consent'] : null;
        $this->container['deviceIdentToken'] = isset($data['deviceIdentToken']) ? $data['deviceIdentToken'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['orderDetails'] === null) {
            $invalidProperties[] = "'orderDetails' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['redirectLinks'] === null) {
            $invalidProperties[] = "'redirectLinks' can't be null";
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
     * Gets financingTerm
     *
     * @return int|null
     */
    public function getFinancingTerm()
    {
        return $this->container['financingTerm'];
    }

    /**
     * Sets financingTerm
     *
     * @param int|null $financingTerm ' Duration in months, depending on individual shop conditions and order value (please check your ratenkauf widget). Will be set to default value if not available. '
     *
     * @return self
     */
    public function setFinancingTerm($financingTerm)
    {
        $this->container['financingTerm'] = $financingTerm;

        return $this;
    }

    /**
     * Gets orderDetails
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\OrderDetails
     */
    public function getOrderDetails()
    {
        return $this->container['orderDetails'];
    }

    /**
     * Sets orderDetails
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\OrderDetails $orderDetails orderDetails
     *
     * @return self
     */
    public function setOrderDetails($orderDetails)
    {
        $this->container['orderDetails'] = $orderDetails;

        return $this;
    }

    /**
     * Gets shopsystem
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\Shopsystem|null
     */
    public function getShopsystem()
    {
        return $this->container['shopsystem'];
    }

    /**
     * Sets shopsystem
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\Shopsystem|null $shopsystem shopsystem
     *
     * @return self
     */
    public function setShopsystem($shopsystem)
    {
        $this->container['shopsystem'] = $shopsystem;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\Customer $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets customerRelationship
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\CustomerRelationship|null
     */
    public function getCustomerRelationship()
    {
        return $this->container['customerRelationship'];
    }

    /**
     * Sets customerRelationship
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\CustomerRelationship|null $customerRelationship customerRelationship
     *
     * @return self
     */
    public function setCustomerRelationship($customerRelationship)
    {
        $this->container['customerRelationship'] = $customerRelationship;

        return $this;
    }

    /**
     * Gets redirectLinks
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\RedirectLinks
     */
    public function getRedirectLinks()
    {
        return $this->container['redirectLinks'];
    }

    /**
     * Sets redirectLinks
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\RedirectLinks $redirectLinks redirectLinks
     *
     * @return self
     */
    public function setRedirectLinks($redirectLinks)
    {
        $this->container['redirectLinks'] = $redirectLinks;

        return $this;
    }

    /**
     * Gets consent
     *
     * @return \Teambank\RatenkaufByEasyCreditApiV3\Model\Consent|null
     */
    public function getConsent()
    {
        return $this->container['consent'];
    }

    /**
     * Sets consent
     *
     * @param \Teambank\RatenkaufByEasyCreditApiV3\Model\Consent|null $consent consent
     *
     * @return self
     */
    public function setConsent($consent)
    {
        $this->container['consent'] = $consent;

        return $this;
    }

    /**
     * Gets deviceIdentToken
     *
     * @return string|null
     */
    public function getDeviceIdentToken()
    {
        return $this->container['deviceIdentToken'];
    }

    /**
     * Sets deviceIdentToken
     *
     * @param string|null $deviceIdentToken Device Ident Token
     *
     * @return self
     */
    public function setDeviceIdentToken($deviceIdentToken)
    {
        $this->container['deviceIdentToken'] = $deviceIdentToken;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

