<?php

namespace RcSimulacionClientPhp\Client\Model;

use \ArrayAccess;
use \RcSimulacionClientPhp\Client\ObjectSerializer;

class DomicilioRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'DomicilioRespuesta';
    
    protected static $apihubTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => '\RcSimulacionClientPhp\Client\Model\CatalogoEstados',
        'cp' => 'int',
        'fecha_residencia' => 'string',
        'numero_telefono' => 'string',
        'tipo_domicilio' => '\RcSimulacionClientPhp\Client\Model\CatalogoTipoDomicilio',
        'tipo_asentamiento' => '\RcSimulacionClientPhp\Client\Model\CatalogoTipoAsentamiento',
        'fecha_registro_domicilio' => 'string',
        'tipo_alta_domicilio' => 'int',
        'numero_otorgantes_carga' => 'int',
        'numero_otorgantes_consulta' => 'int',
        'id_domicilio' => 'string'
    ];
    
    protected static $apihubFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => 'int32',
        'fecha_residencia' => 'yyyy-MM-dd',
        'numero_telefono' => null,
        'tipo_domicilio' => null,
        'tipo_asentamiento' => null,
        'fecha_registro_domicilio' => 'yyyy-MM-dd',
        'tipo_alta_domicilio' => 'int32',
        'numero_otorgantes_carga' => 'int32',
        'numero_otorgantes_consulta' => 'int32',
        'id_domicilio' => null
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'CP',
        'fecha_residencia' => 'fechaResidencia',
        'numero_telefono' => 'numeroTelefono',
        'tipo_domicilio' => 'tipoDomicilio',
        'tipo_asentamiento' => 'tipoAsentamiento',
        'fecha_registro_domicilio' => 'fechaRegistroDomicilio',
        'tipo_alta_domicilio' => 'tipoAltaDomicilio',
        'numero_otorgantes_carga' => 'numeroOtorgantesCarga',
        'numero_otorgantes_consulta' => 'numeroOtorgantesConsulta',
        'id_domicilio' => 'idDomicilio'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'cp' => 'setCp',
        'fecha_residencia' => 'setFechaResidencia',
        'numero_telefono' => 'setNumeroTelefono',
        'tipo_domicilio' => 'setTipoDomicilio',
        'tipo_asentamiento' => 'setTipoAsentamiento',
        'fecha_registro_domicilio' => 'setFechaRegistroDomicilio',
        'tipo_alta_domicilio' => 'setTipoAltaDomicilio',
        'numero_otorgantes_carga' => 'setNumeroOtorgantesCarga',
        'numero_otorgantes_consulta' => 'setNumeroOtorgantesConsulta',
        'id_domicilio' => 'setIdDomicilio'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'cp' => 'getCp',
        'fecha_residencia' => 'getFechaResidencia',
        'numero_telefono' => 'getNumeroTelefono',
        'tipo_domicilio' => 'getTipoDomicilio',
        'tipo_asentamiento' => 'getTipoAsentamiento',
        'fecha_registro_domicilio' => 'getFechaRegistroDomicilio',
        'tipo_alta_domicilio' => 'getTipoAltaDomicilio',
        'numero_otorgantes_carga' => 'getNumeroOtorgantesCarga',
        'numero_otorgantes_consulta' => 'getNumeroOtorgantesConsulta',
        'id_domicilio' => 'getIdDomicilio'
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
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['fecha_residencia'] = isset($data['fecha_residencia']) ? $data['fecha_residencia'] : null;
        $this->container['numero_telefono'] = isset($data['numero_telefono']) ? $data['numero_telefono'] : null;
        $this->container['tipo_domicilio'] = isset($data['tipo_domicilio']) ? $data['tipo_domicilio'] : null;
        $this->container['tipo_asentamiento'] = isset($data['tipo_asentamiento']) ? $data['tipo_asentamiento'] : null;
        $this->container['fecha_registro_domicilio'] = isset($data['fecha_registro_domicilio']) ? $data['fecha_registro_domicilio'] : null;
        $this->container['tipo_alta_domicilio'] = isset($data['tipo_alta_domicilio']) ? $data['tipo_alta_domicilio'] : null;
        $this->container['numero_otorgantes_carga'] = isset($data['numero_otorgantes_carga']) ? $data['numero_otorgantes_carga'] : null;
        $this->container['numero_otorgantes_consulta'] = isset($data['numero_otorgantes_consulta']) ? $data['numero_otorgantes_consulta'] : null;
        $this->container['id_domicilio'] = isset($data['id_domicilio']) ? $data['id_domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) > 85)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 85.";
        }
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) < 0)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) > 65)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) < 0)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) < 0)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) > 20)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_alta_domicilio']) && ($this->container['tipo_alta_domicilio'] > 1)) {
            $invalidProperties[] = "invalid value for 'tipo_alta_domicilio', must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['tipo_alta_domicilio']) && ($this->container['tipo_alta_domicilio'] < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_alta_domicilio', must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_otorgantes_carga']) && ($this->container['numero_otorgantes_carga'] > 1)) {
            $invalidProperties[] = "invalid value for 'numero_otorgantes_carga', must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['numero_otorgantes_carga']) && ($this->container['numero_otorgantes_carga'] < 0)) {
            $invalidProperties[] = "invalid value for 'numero_otorgantes_carga', must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_otorgantes_consulta']) && ($this->container['numero_otorgantes_consulta'] > 1)) {
            $invalidProperties[] = "invalid value for 'numero_otorgantes_consulta', must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['numero_otorgantes_consulta']) && ($this->container['numero_otorgantes_consulta'] < 0)) {
            $invalidProperties[] = "invalid value for 'numero_otorgantes_consulta', must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if (!is_null($direccion) && (mb_strlen($direccion) > 85)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling DomicilioRespuesta., must be smaller than or equal to 85.');
        }
        if (!is_null($direccion) && (mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }
    
    public function setColoniaPoblacion($colonia_poblacion)
    {
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling DomicilioRespuesta., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['colonia_poblacion'] = $colonia_poblacion;
        return $this;
    }
    
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }
    
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) > 65)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling DomicilioRespuesta., must be smaller than or equal to 65.');
        }
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['delegacion_municipio'] = $delegacion_municipio;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if (!is_null($ciudad) && (mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling DomicilioRespuesta., must be smaller than or equal to 65.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getFechaResidencia()
    {
        return $this->container['fecha_residencia'];
    }
    
    public function setFechaResidencia($fecha_residencia)
    {
        $this->container['fecha_residencia'] = $fecha_residencia;
        return $this;
    }
    
    public function getNumeroTelefono()
    {
        return $this->container['numero_telefono'];
    }
    
    public function setNumeroTelefono($numero_telefono)
    {
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) > 20)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling DomicilioRespuesta., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['numero_telefono'] = $numero_telefono;
        return $this;
    }
    
    public function getTipoDomicilio()
    {
        return $this->container['tipo_domicilio'];
    }
    
    public function setTipoDomicilio($tipo_domicilio)
    {
        $this->container['tipo_domicilio'] = $tipo_domicilio;
        return $this;
    }
    
    public function getTipoAsentamiento()
    {
        return $this->container['tipo_asentamiento'];
    }
    
    public function setTipoAsentamiento($tipo_asentamiento)
    {
        $this->container['tipo_asentamiento'] = $tipo_asentamiento;
        return $this;
    }
    
    public function getFechaRegistroDomicilio()
    {
        return $this->container['fecha_registro_domicilio'];
    }
    
    public function setFechaRegistroDomicilio($fecha_registro_domicilio)
    {
        $this->container['fecha_registro_domicilio'] = $fecha_registro_domicilio;
        return $this;
    }
    
    public function getTipoAltaDomicilio()
    {
        return $this->container['tipo_alta_domicilio'];
    }
    
    public function setTipoAltaDomicilio($tipo_alta_domicilio)
    {
        if (!is_null($tipo_alta_domicilio) && ($tipo_alta_domicilio > 1)) {
            throw new \InvalidArgumentException('invalid value for $tipo_alta_domicilio when calling DomicilioRespuesta., must be smaller than or equal to 1.');
        }
        if (!is_null($tipo_alta_domicilio) && ($tipo_alta_domicilio < 0)) {
            throw new \InvalidArgumentException('invalid value for $tipo_alta_domicilio when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['tipo_alta_domicilio'] = $tipo_alta_domicilio;
        return $this;
    }
    
    public function getNumeroOtorgantesCarga()
    {
        return $this->container['numero_otorgantes_carga'];
    }
    
    public function setNumeroOtorgantesCarga($numero_otorgantes_carga)
    {
        if (!is_null($numero_otorgantes_carga) && ($numero_otorgantes_carga > 1)) {
            throw new \InvalidArgumentException('invalid value for $numero_otorgantes_carga when calling DomicilioRespuesta., must be smaller than or equal to 1.');
        }
        if (!is_null($numero_otorgantes_carga) && ($numero_otorgantes_carga < 0)) {
            throw new \InvalidArgumentException('invalid value for $numero_otorgantes_carga when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['numero_otorgantes_carga'] = $numero_otorgantes_carga;
        return $this;
    }
    
    public function getNumeroOtorgantesConsulta()
    {
        return $this->container['numero_otorgantes_consulta'];
    }
    
    public function setNumeroOtorgantesConsulta($numero_otorgantes_consulta)
    {
        if (!is_null($numero_otorgantes_consulta) && ($numero_otorgantes_consulta > 1)) {
            throw new \InvalidArgumentException('invalid value for $numero_otorgantes_consulta when calling DomicilioRespuesta., must be smaller than or equal to 1.');
        }
        if (!is_null($numero_otorgantes_consulta) && ($numero_otorgantes_consulta < 0)) {
            throw new \InvalidArgumentException('invalid value for $numero_otorgantes_consulta when calling DomicilioRespuesta., must be bigger than or equal to 0.');
        }
        $this->container['numero_otorgantes_consulta'] = $numero_otorgantes_consulta;
        return $this;
    }
    
    public function getIdDomicilio()
    {
        return $this->container['id_domicilio'];
    }
    
    public function setIdDomicilio($id_domicilio)
    {
        $this->container['id_domicilio'] = $id_domicilio;
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
