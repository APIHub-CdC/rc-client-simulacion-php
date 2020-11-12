<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class DomicilioPeticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'DomicilioPeticion';
    
    protected static $apihubTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => '\RC\Simulacion\MX\Client\Model\CatalogoEstados',
        'cp' => 'string',
        'fecha_residencia' => 'string',
        'numero_telefono' => 'string',
        'tipo_domicilio' => '\RC\Simulacion\MX\Client\Model\CatalogoTipoDomicilio',
        'tipo_asentamiento' => '\RC\Simulacion\MX\Client\Model\CatalogoTipoAsentamiento'
    ];
    
    protected static $apihubFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'fecha_residencia' => 'yyyy-MM-dd',
        'numero_telefono' => null,
        'tipo_domicilio' => null,
        'tipo_asentamiento' => null
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
        'tipo_asentamiento' => 'tipoAsentamiento'
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
        'tipo_asentamiento' => 'setTipoAsentamiento'
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
        'tipo_asentamiento' => 'getTipoAsentamiento'
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
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['direccion'] === null) {
            $invalidProperties[] = "'direccion' can't be null";
        }
        if ((mb_strlen($this->container['direccion']) > 85)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 85.";
        }
        if ((mb_strlen($this->container['direccion']) < 0)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['colonia_poblacion'] === null) {
            $invalidProperties[] = "'colonia_poblacion' can't be null";
        }
        if ((mb_strlen($this->container['colonia_poblacion']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['colonia_poblacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['delegacion_municipio'] === null) {
            $invalidProperties[] = "'delegacion_municipio' can't be null";
        }
        if ((mb_strlen($this->container['delegacion_municipio']) > 65)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['delegacion_municipio']) < 0)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['ciudad'] === null) {
            $invalidProperties[] = "'ciudad' can't be null";
        }
        if ((mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if ((mb_strlen($this->container['ciudad']) < 0)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['estado'] === null) {
            $invalidProperties[] = "'estado' can't be null";
        }
        if ($this->container['cp'] === null) {
            $invalidProperties[] = "'cp' can't be null";
        }
        if ((mb_strlen($this->container['cp']) > 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 5.";
        }
        if ((mb_strlen($this->container['cp']) < 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) > 20)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be bigger than or equal to 0.";
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
        if ((mb_strlen($direccion) > 85)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling DomicilioPeticion., must be smaller than or equal to 85.');
        }
        if ((mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling DomicilioPeticion., must be bigger than or equal to 0.');
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
        if ((mb_strlen($colonia_poblacion) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling DomicilioPeticion., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($colonia_poblacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling DomicilioPeticion., must be bigger than or equal to 0.');
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
        if ((mb_strlen($delegacion_municipio) > 65)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling DomicilioPeticion., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($delegacion_municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling DomicilioPeticion., must be bigger than or equal to 0.');
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
        if ((mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling DomicilioPeticion., must be smaller than or equal to 65.');
        }
        if ((mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling DomicilioPeticion., must be bigger than or equal to 0.');
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
        if ((mb_strlen($cp) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling DomicilioPeticion., must be smaller than or equal to 5.');
        }
        if ((mb_strlen($cp) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling DomicilioPeticion., must be bigger than or equal to 5.');
        }
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
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling DomicilioPeticion., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling DomicilioPeticion., must be bigger than or equal to 0.');
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
