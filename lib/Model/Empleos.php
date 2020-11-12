<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class Empleos implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Empleos';
    
    protected static $apihubTypes = [
        'empleos' => '\RC\Simulacion\MX\Client\Model\Empleo[]'
    ];
    
    protected static $apihubFormats = [
        'empleos' => null
    ];
    
    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'empleos' => 'empleos'
    ];
    
    protected static $setters = [
        'empleos' => 'setEmpleos'
    ];
    
    protected static $getters = [
        'empleos' => 'getEmpleos'
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
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['empleos'] = isset($data['empleos']) ? $data['empleos'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getEmpleos()
    {
        return $this->container['empleos'];
    }
    
    public function setEmpleos($empleos)
    {
        $this->container['empleos'] = $empleos;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
