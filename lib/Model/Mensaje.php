<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class Mensaje implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Mensaje';
    
    protected static $apihubTypes = [
        'tipo_mensaje' => 'int',
        'leyenda' => 'string'
    ];
    
    protected static $apihubFormats = [
        'tipo_mensaje' => 'int32',
        'leyenda' => null
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
        'tipo_mensaje' => 'tipoMensaje',
        'leyenda' => 'leyenda'
    ];
    
    protected static $setters = [
        'tipo_mensaje' => 'setTipoMensaje',
        'leyenda' => 'setLeyenda'
    ];
    
    protected static $getters = [
        'tipo_mensaje' => 'getTipoMensaje',
        'leyenda' => 'getLeyenda'
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
        $this->container['tipo_mensaje'] = isset($data['tipo_mensaje']) ? $data['tipo_mensaje'] : null;
        $this->container['leyenda'] = isset($data['leyenda']) ? $data['leyenda'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['leyenda']) && (mb_strlen($this->container['leyenda']) > 100)) {
            $invalidProperties[] = "invalid value for 'leyenda', the character length must be smaller than or equal to 100.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getTipoMensaje()
    {
        return $this->container['tipo_mensaje'];
    }
    
    public function setTipoMensaje($tipo_mensaje)
    {
        $this->container['tipo_mensaje'] = $tipo_mensaje;
        return $this;
    }
    
    public function getLeyenda()
    {
        return $this->container['leyenda'];
    }
    
    public function setLeyenda($leyenda)
    {
        if (!is_null($leyenda) && (mb_strlen($leyenda) > 100)) {
            throw new \InvalidArgumentException('invalid length for $leyenda when calling Mensaje., must be smaller than or equal to 100.');
        }
        $this->container['leyenda'] = $leyenda;
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
