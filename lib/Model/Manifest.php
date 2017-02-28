<?php
/**
 * Manifest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Client\Model;

use \ArrayAccess;

/**
 * Manifest Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Manifest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'manifest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'urn'           => 'string',
        'type'          => 'string',
        'progress'      => 'string',
        'status'        => 'string',
        'has_thumbnail' => 'bool',
        'region'        => 'string',
        'derivatives'   => '\Autodesk\Client\Model\ManifestDerivative[]',
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'urn'           => 'urn',
        'type'          => 'type',
        'progress'      => 'progress',
        'status'        => 'status',
        'has_thumbnail' => 'hasThumbnail',
        'region'        => 'region',
        'derivatives'   => 'derivatives',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'urn'           => 'setUrn',
        'type'          => 'setType',
        'progress'      => 'setProgress',
        'status'        => 'setStatus',
        'has_thumbnail' => 'setHasThumbnail',
        'region'        => 'setRegion',
        'derivatives'   => 'setDerivatives',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'urn'           => 'getUrn',
        'type'          => 'getType',
        'progress'      => 'getProgress',
        'status'        => 'getStatus',
        'has_thumbnail' => 'getHasThumbnail',
        'region'        => 'getRegion',
        'derivatives'   => 'getDerivatives',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }


    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['urn'] = isset($data['urn']) ? $data['urn'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['has_thumbnail'] = isset($data['has_thumbnail']) ? $data['has_thumbnail'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['derivatives'] = isset($data['derivatives']) ? $data['derivatives'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['urn'] === null) {
            $invalid_properties[] = "'urn' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalid_properties[] = "'progress' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        if ($this->container['has_thumbnail'] === null) {
            $invalid_properties[] = "'has_thumbnail' can't be null";
        }
        if ($this->container['derivatives'] === null) {
            $invalid_properties[] = "'derivatives' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['urn'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['progress'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if ($this->container['has_thumbnail'] === null) {
            return false;
        }
        if ($this->container['derivatives'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets urn
     * @return string
     */
    public function getUrn()
    {
        return $this->container['urn'];
    }

    /**
     * Sets urn
     * @param string $urn The Base64 (URL safe) encoded source file URN
     * @return $this
     */
    public function setUrn($urn)
    {
        $this->container['urn'] = $urn;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Type of this JSON object
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets progress
     * @return string
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     * @param string $progress Overall progress for all translation jobs in the manifest. Possible values are: `complete` or `##%`
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Overall status for translation jobs in the “manifest”. Possible values are: `pending`, `success`, `inprogress`, `failed` and `timeout`
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets has_thumbnail
     * @return bool
     */
    public function getHasThumbnail()
    {
        return $this->container['has_thumbnail'];
    }

    /**
     * Sets has_thumbnail
     * @param bool $has_thumbnail Indicates if a thumbnail has been generated for the source file URN
     * @return $this
     */
    public function setHasThumbnail($has_thumbnail)
    {
        $this->container['has_thumbnail'] = $has_thumbnail;

        return $this;
    }

    /**
     * Gets region
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     * @param string $region Region
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets derivatives
     * @return \Autodesk\Client\Model\ManifestDerivative[]
     */
    public function getDerivatives()
    {
        return $this->container['derivatives'];
    }

    /**
     * Sets derivatives
     * @param \Autodesk\Client\Model\ManifestDerivative[] $derivatives Requested output files for the source file URN
     * @return $this
     */
    public function setDerivatives($derivatives)
    {
        $this->container['derivatives'] = $derivatives;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed $value Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


