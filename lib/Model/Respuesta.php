<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Respuesta';
    
    protected static $apihubTypes = [
        'folio_consulta' => 'string',
        'folio_consulta_otorgante' => 'string',
        'clave_otorgante' => 'string',
        'declaraciones_consumidor' => 'string',
        'persona' => '\RC\Simulacion\MX\Client\Model\PersonasRespuesta',
        'consultas' => '\RC\Simulacion\MX\Client\Model\Consulta[]',
        'creditos' => '\RC\Simulacion\MX\Client\Model\Credito[]',
        'domicilios' => '\RC\Simulacion\MX\Client\Model\DomicilioRespuesta[]',
        'empleos' => '\RC\Simulacion\MX\Client\Model\Empleo[]',
        'mensajes' => '\RC\Simulacion\MX\Client\Model\Mensaje[]'
    ];
    
    protected static $apihubFormats = [
        'folio_consulta' => null,
        'folio_consulta_otorgante' => null,
        'clave_otorgante' => null,
        'declaraciones_consumidor' => null,
        'persona' => null,
        'consultas' => null,
        'creditos' => null,
        'domicilios' => null,
        'empleos' => null,
        'mensajes' => null
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
        'folio_consulta' => 'folioConsulta',
        'folio_consulta_otorgante' => 'folioConsultaOtorgante',
        'clave_otorgante' => 'claveOtorgante',
        'declaraciones_consumidor' => 'declaracionesConsumidor',
        'persona' => 'persona',
        'consultas' => 'consultas',
        'creditos' => 'creditos',
        'domicilios' => 'domicilios',
        'empleos' => 'empleos',
        'mensajes' => 'mensajes'
    ];
    
    protected static $setters = [
        'folio_consulta' => 'setFolioConsulta',
        'folio_consulta_otorgante' => 'setFolioConsultaOtorgante',
        'clave_otorgante' => 'setClaveOtorgante',
        'declaraciones_consumidor' => 'setDeclaracionesConsumidor',
        'persona' => 'setPersona',
        'consultas' => 'setConsultas',
        'creditos' => 'setCreditos',
        'domicilios' => 'setDomicilios',
        'empleos' => 'setEmpleos',
        'mensajes' => 'setMensajes'
    ];
    
    protected static $getters = [
        'folio_consulta' => 'getFolioConsulta',
        'folio_consulta_otorgante' => 'getFolioConsultaOtorgante',
        'clave_otorgante' => 'getClaveOtorgante',
        'declaraciones_consumidor' => 'getDeclaracionesConsumidor',
        'persona' => 'getPersona',
        'consultas' => 'getConsultas',
        'creditos' => 'getCreditos',
        'domicilios' => 'getDomicilios',
        'empleos' => 'getEmpleos',
        'mensajes' => 'getMensajes'
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
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['folio_consulta_otorgante'] = isset($data['folio_consulta_otorgante']) ? $data['folio_consulta_otorgante'] : null;
        $this->container['clave_otorgante'] = isset($data['clave_otorgante']) ? $data['clave_otorgante'] : null;
        $this->container['declaraciones_consumidor'] = isset($data['declaraciones_consumidor']) ? $data['declaraciones_consumidor'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
        $this->container['consultas'] = isset($data['consultas']) ? $data['consultas'] : null;
        $this->container['creditos'] = isset($data['creditos']) ? $data['creditos'] : null;
        $this->container['domicilios'] = isset($data['domicilios']) ? $data['domicilios'] : null;
        $this->container['empleos'] = isset($data['empleos']) ? $data['empleos'] : null;
        $this->container['mensajes'] = isset($data['mensajes']) ? $data['mensajes'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['declaraciones_consumidor']) && (mb_strlen($this->container['declaraciones_consumidor']) > 100)) {
            $invalidProperties[] = "invalid value for 'declaraciones_consumidor', the character length must be smaller than or equal to 100.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
    }
    
    public function getFolioConsultaOtorgante()
    {
        return $this->container['folio_consulta_otorgante'];
    }
    
    public function setFolioConsultaOtorgante($folio_consulta_otorgante)
    {
        $this->container['folio_consulta_otorgante'] = $folio_consulta_otorgante;
        return $this;
    }
    
    public function getClaveOtorgante()
    {
        return $this->container['clave_otorgante'];
    }
    
    public function setClaveOtorgante($clave_otorgante)
    {
        $this->container['clave_otorgante'] = $clave_otorgante;
        return $this;
    }
    
    public function getDeclaracionesConsumidor()
    {
        return $this->container['declaraciones_consumidor'];
    }
    
    public function setDeclaracionesConsumidor($declaraciones_consumidor)
    {
        if (!is_null($declaraciones_consumidor) && (mb_strlen($declaraciones_consumidor) > 100)) {
            throw new \InvalidArgumentException('invalid length for $declaraciones_consumidor when calling Respuesta., must be smaller than or equal to 100.');
        }
        $this->container['declaraciones_consumidor'] = $declaraciones_consumidor;
        return $this;
    }
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
        return $this;
    }
    
    public function getConsultas()
    {
        return $this->container['consultas'];
    }
    
    public function setConsultas($consultas)
    {
        $this->container['consultas'] = $consultas;
        return $this;
    }
    
    public function getCreditos()
    {
        return $this->container['creditos'];
    }
    
    public function setCreditos($creditos)
    {
        $this->container['creditos'] = $creditos;
        return $this;
    }
    
    public function getDomicilios()
    {
        return $this->container['domicilios'];
    }
    
    public function setDomicilios($domicilios)
    {
        $this->container['domicilios'] = $domicilios;
        return $this;
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
    
    public function getMensajes()
    {
        return $this->container['mensajes'];
    }
    
    public function setMensajes($mensajes)
    {
        $this->container['mensajes'] = $mensajes;
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
