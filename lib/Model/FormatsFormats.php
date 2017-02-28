<?php
/**
 * FormatsFormats
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
 * FormatsFormats Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FormatsFormats implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'formats_formats';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'svf'       => 'string[]',
        'thumbnail' => 'string[]',
        'stl'       => 'string[]',
        'step'      => 'string[]',
        'iges'      => 'string[]',
        'obj'       => 'string[]',
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
        'svf'       => 'svf',
        'thumbnail' => 'thumbnail',
        'stl'       => 'stl',
        'step'      => 'step',
        'iges'      => 'iges',
        'obj'       => 'obj',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'svf'       => 'setSvf',
        'thumbnail' => 'setThumbnail',
        'stl'       => 'setStl',
        'step'      => 'setStep',
        'iges'      => 'setIges',
        'obj'       => 'setObj',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'svf'       => 'getSvf',
        'thumbnail' => 'getThumbnail',
        'stl'       => 'getStl',
        'step'      => 'getStep',
        'iges'      => 'getIges',
        'obj'       => 'getObj',
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
        $this->container['svf'] = isset($data['svf']) ? $data['svf'] : null;
        $this->container['thumbnail'] = isset($data['thumbnail']) ? $data['thumbnail'] : null;
        $this->container['stl'] = isset($data['stl']) ? $data['stl'] : null;
        $this->container['step'] = isset($data['step']) ? $data['step'] : null;
        $this->container['iges'] = isset($data['iges']) ? $data['iges'] : null;
        $this->container['obj'] = isset($data['obj']) ? $data['obj'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets svf
     * @return string[]
     */
    public function getSvf()
    {
        return $this->container['svf'];
    }

    /**
     * Sets svf
     * @param string[] $svf
     * @return $this
     */
    public function setSvf($svf)
    {
        $this->container['svf'] = $svf;

        return $this;
    }

    /**
     * Gets thumbnail
     * @return string[]
     */
    public function getThumbnail()
    {
        return $this->container['thumbnail'];
    }

    /**
     * Sets thumbnail
     * @param string[] $thumbnail
     * @return $this
     */
    public function setThumbnail($thumbnail)
    {
        $this->container['thumbnail'] = $thumbnail;

        return $this;
    }

    /**
     * Gets stl
     * @return string[]
     */
    public function getStl()
    {
        return $this->container['stl'];
    }

    /**
     * Sets stl
     * @param string[] $stl
     * @return $this
     */
    public function setStl($stl)
    {
        $this->container['stl'] = $stl;

        return $this;
    }

    /**
     * Gets step
     * @return string[]
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     * @param string[] $step
     * @return $this
     */
    public function setStep($step)
    {
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets iges
     * @return string[]
     */
    public function getIges()
    {
        return $this->container['iges'];
    }

    /**
     * Sets iges
     * @param string[] $iges
     * @return $this
     */
    public function setIges($iges)
    {
        $this->container['iges'] = $iges;

        return $this;
    }

    /**
     * Gets obj
     * @return string[]
     */
    public function getObj()
    {
        return $this->container['obj'];
    }

    /**
     * Sets obj
     * @param string[] $obj
     * @return $this
     */
    public function setObj($obj)
    {
        $this->container['obj'] = $obj;

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


