<?php
/**
 * JobPayloadItem
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
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

namespace Autodesk\Forge\Client\Model;

use \ArrayAccess;

/**
 * JobPayloadItem Class Doc Comment
 *
 * @category    Class
 * @description Output description object, depends of the type
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class JobPayloadItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'jobPayloadItem';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'type' => 'string',
        'views' => 'string[]',
        'advanced' => '\Autodesk\Forge\Client\Model\JobObjOutputPayloadAdvanced',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'views' => 'views',
        'advanced' => 'advanced',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'views' => 'setViews',
        'advanced' => 'setAdvanced',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'views' => 'getViews',
        'advanced' => 'getAdvanced',
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

    const TYPE_SVF2 = 'svf2';
    const TYPE_SVF = 'svf';
    const TYPE_THUMBNAIL = 'thumbnail';
    const TYPE_STL = 'stl';
    const TYPE_STEP = 'step';
    const TYPE_IGES = 'iges';
    const TYPE_OBJ = 'obj';
    const TYPE_IFC = 'ifc';
    const VIEWS__2D = '2d';
    const VIEWS__3D = '3d';



    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SVF2,
            self::TYPE_THUMBNAIL,
            self::TYPE_STL,
            self::TYPE_STEP,
            self::TYPE_IGES,
            self::TYPE_OBJ,
            self::TYPE_IFC,

        ];
    }

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getViewsAllowableValues()
    {
        return [
            self::VIEWS__2D,
            self::VIEWS__3D,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['views'] = isset($data['views']) ? $data['views'] : null;
        $this->container['advanced'] = isset($data['advanced']) ? $data['advanced'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["svf2","svf", "thumbnail", "stl", "step", "iges", "obj", "ifc"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'svf2','svf', 'thumbnail', 'stl', 'step', 'iges', 'obj', 'ifc'.";
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

        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["svf2","svf", "thumbnail", "stl", "step", "iges", "obj", "ifc"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $type The requested output types. Possible values include `svf2`,`svf`, `thumbnai`, `stl`, `step`, `iges`, 'ifc', or `obj`. For a list of supported types, call the [GET formats](https://developer.autodesk.com/en/docs/model-derivative/v2/reference/http/formats-GET) endpoint.
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('svf2','svf', 'thumbnail', 'stl', 'step', 'iges', 'obj', 'ifc');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'svf2','svf', 'thumbnail', 'stl', 'step', 'iges', 'obj','ifc' ");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets views
     * @return string[]
     */
    public function getViews()
    {
        return $this->container['views'];
    }

    /**
     * Sets views
     * @param string[] $views
     * @return $this
     */
    public function setViews($views)
    {
        $allowed_values = array('2d', '3d');
        if (!is_null($views) && (array_diff($views, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'views', must be one of '2d', '3d'");
        }
        $this->container['views'] = $views;

        return $this;
    }

    /**
     * Gets advanced
     * @return \Autodesk\Forge\Client\Model\JobObjOutputPayloadAdvanced
     */
    public function getAdvanced()
    {
        return $this->container['advanced'];
    }

    /**
     * Sets advanced
     * @param \Autodesk\Forge\Client\Model\JobObjOutputPayloadAdvanced $advanced
     * @return $this
     */
    public function setAdvanced($advanced)
    {
        $this->container['advanced'] = $advanced;

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
     * @param  mixed   $value  Value to be set
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
            return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


