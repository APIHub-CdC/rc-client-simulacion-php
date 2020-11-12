<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class CAN implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'CAN';
    
    protected static $apihubTypes = [
        'identificador_can' => 'string',
        'prelacion_origen' => 'int',
        'prelacion_actual' => 'int',
        'fecha_apertura_can' => 'string',
        'fecha_cancelacion_can' => 'string',
        'historico_can' => 'string',
        'fecha_mrcan' => 'string',
        'fecha_macan' => 'string'
    ];
    
    protected static $apihubFormats = [
        'identificador_can' => null,
        'prelacion_origen' => 'int32',
        'prelacion_actual' => 'int32',
        'fecha_apertura_can' => 'yyyy-MM-dd',
        'fecha_cancelacion_can' => 'yyyy-MM-dd',
        'historico_can' => null,
        'fecha_mrcan' => 'yyyy-MM-dd',
        'fecha_macan' => 'yyyy-MM-dd'
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
        'identificador_can' => 'identificadorCAN',
        'prelacion_origen' => 'prelacionOrigen',
        'prelacion_actual' => 'prelacionActual',
        'fecha_apertura_can' => 'fechaAperturaCAN',
        'fecha_cancelacion_can' => 'fechaCancelacionCAN',
        'historico_can' => 'historicoCAN',
        'fecha_mrcan' => 'fechaMRCAN',
        'fecha_macan' => 'fechaMACAN'
    ];
    
    protected static $setters = [
        'identificador_can' => 'setIdentificadorCan',
        'prelacion_origen' => 'setPrelacionOrigen',
        'prelacion_actual' => 'setPrelacionActual',
        'fecha_apertura_can' => 'setFechaAperturaCan',
        'fecha_cancelacion_can' => 'setFechaCancelacionCan',
        'historico_can' => 'setHistoricoCan',
        'fecha_mrcan' => 'setFechaMrcan',
        'fecha_macan' => 'setFechaMacan'
    ];
    
    protected static $getters = [
        'identificador_can' => 'getIdentificadorCan',
        'prelacion_origen' => 'getPrelacionOrigen',
        'prelacion_actual' => 'getPrelacionActual',
        'fecha_apertura_can' => 'getFechaAperturaCan',
        'fecha_cancelacion_can' => 'getFechaCancelacionCan',
        'historico_can' => 'getHistoricoCan',
        'fecha_mrcan' => 'getFechaMrcan',
        'fecha_macan' => 'getFechaMacan'
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
        $this->container['identificador_can'] = isset($data['identificador_can']) ? $data['identificador_can'] : null;
        $this->container['prelacion_origen'] = isset($data['prelacion_origen']) ? $data['prelacion_origen'] : null;
        $this->container['prelacion_actual'] = isset($data['prelacion_actual']) ? $data['prelacion_actual'] : null;
        $this->container['fecha_apertura_can'] = isset($data['fecha_apertura_can']) ? $data['fecha_apertura_can'] : null;
        $this->container['fecha_cancelacion_can'] = isset($data['fecha_cancelacion_can']) ? $data['fecha_cancelacion_can'] : null;
        $this->container['historico_can'] = isset($data['historico_can']) ? $data['historico_can'] : null;
        $this->container['fecha_mrcan'] = isset($data['fecha_mrcan']) ? $data['fecha_mrcan'] : null;
        $this->container['fecha_macan'] = isset($data['fecha_macan']) ? $data['fecha_macan'] : null;
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
    
    public function getIdentificadorCan()
    {
        return $this->container['identificador_can'];
    }
    
    public function setIdentificadorCan($identificador_can)
    {
        $this->container['identificador_can'] = $identificador_can;
        return $this;
    }
    
    public function getPrelacionOrigen()
    {
        return $this->container['prelacion_origen'];
    }
    
    public function setPrelacionOrigen($prelacion_origen)
    {
        $this->container['prelacion_origen'] = $prelacion_origen;
        return $this;
    }
    
    public function getPrelacionActual()
    {
        return $this->container['prelacion_actual'];
    }
    
    public function setPrelacionActual($prelacion_actual)
    {
        $this->container['prelacion_actual'] = $prelacion_actual;
        return $this;
    }
    
    public function getFechaAperturaCan()
    {
        return $this->container['fecha_apertura_can'];
    }
    
    public function setFechaAperturaCan($fecha_apertura_can)
    {
        $this->container['fecha_apertura_can'] = $fecha_apertura_can;
        return $this;
    }
    
    public function getFechaCancelacionCan()
    {
        return $this->container['fecha_cancelacion_can'];
    }
    
    public function setFechaCancelacionCan($fecha_cancelacion_can)
    {
        $this->container['fecha_cancelacion_can'] = $fecha_cancelacion_can;
        return $this;
    }
    
    public function getHistoricoCan()
    {
        return $this->container['historico_can'];
    }
    
    public function setHistoricoCan($historico_can)
    {
        $this->container['historico_can'] = $historico_can;
        return $this;
    }
    
    public function getFechaMrcan()
    {
        return $this->container['fecha_mrcan'];
    }
    
    public function setFechaMrcan($fecha_mrcan)
    {
        $this->container['fecha_mrcan'] = $fecha_mrcan;
        return $this;
    }
    
    public function getFechaMacan()
    {
        return $this->container['fecha_macan'];
    }
    
    public function setFechaMacan($fecha_macan)
    {
        $this->container['fecha_macan'] = $fecha_macan;
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
