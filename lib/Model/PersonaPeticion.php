<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class PersonaPeticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'PersonaPeticion';
    
    protected static $apihubTypes = [
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'apellido_adicional' => 'string',
        'primer_nombre' => 'string',
        'segundo_nombre' => 'string',
        'fecha_nacimiento' => 'string',
        'rfc' => 'string',
        'curp' => 'string',
        'nacionalidad' => 'string',
        'residencia' => '\RC\Simulacion\MX\Client\Model\CatalogoResidencia',
        'estado_civil' => '\RC\Simulacion\MX\Client\Model\CatalogoEstadoCivil',
        'sexo' => '\RC\Simulacion\MX\Client\Model\CatalogoSexo',
        'clave_elector_ife' => 'string',
        'numero_dependientes' => 'int',
        'fecha_defuncion' => 'string',
        'domicilio' => '\RC\Simulacion\MX\Client\Model\DomicilioPeticion'
    ];
    
    protected static $apihubFormats = [
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'apellido_adicional' => null,
        'primer_nombre' => null,
        'segundo_nombre' => null,
        'fecha_nacimiento' => 'yyyy-MM-dd',
        'rfc' => null,
        'curp' => null,
        'nacionalidad' => null,
        'residencia' => null,
        'estado_civil' => null,
        'sexo' => null,
        'clave_elector_ife' => null,
        'numero_dependientes' => 'int32',
        'fecha_defuncion' => 'yyyy-MM-dd',
        'domicilio' => null
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
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'apellido_adicional' => 'apellidoAdicional',
        'primer_nombre' => 'primerNombre',
        'segundo_nombre' => 'segundoNombre',
        'fecha_nacimiento' => 'fechaNacimiento',
        'rfc' => 'RFC',
        'curp' => 'CURP',
        'nacionalidad' => 'nacionalidad',
        'residencia' => 'residencia',
        'estado_civil' => 'estadoCivil',
        'sexo' => 'sexo',
        'clave_elector_ife' => 'claveElectorIFE',
        'numero_dependientes' => 'numeroDependientes',
        'fecha_defuncion' => 'fechaDefuncion',
        'domicilio' => 'domicilio'
    ];
    
    protected static $setters = [
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'apellido_adicional' => 'setApellidoAdicional',
        'primer_nombre' => 'setPrimerNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'nacionalidad' => 'setNacionalidad',
        'residencia' => 'setResidencia',
        'estado_civil' => 'setEstadoCivil',
        'sexo' => 'setSexo',
        'clave_elector_ife' => 'setClaveElectorIfe',
        'numero_dependientes' => 'setNumeroDependientes',
        'fecha_defuncion' => 'setFechaDefuncion',
        'domicilio' => 'setDomicilio'
    ];
    
    protected static $getters = [
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'apellido_adicional' => 'getApellidoAdicional',
        'primer_nombre' => 'getPrimerNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'nacionalidad' => 'getNacionalidad',
        'residencia' => 'getResidencia',
        'estado_civil' => 'getEstadoCivil',
        'sexo' => 'getSexo',
        'clave_elector_ife' => 'getClaveElectorIfe',
        'numero_dependientes' => 'getNumeroDependientes',
        'fecha_defuncion' => 'getFechaDefuncion',
        'domicilio' => 'getDomicilio'
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
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['apellido_adicional'] = isset($data['apellido_adicional']) ? $data['apellido_adicional'] : null;
        $this->container['primer_nombre'] = isset($data['primer_nombre']) ? $data['primer_nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nacionalidad'] = isset($data['nacionalidad']) ? $data['nacionalidad'] : null;
        $this->container['residencia'] = isset($data['residencia']) ? $data['residencia'] : null;
        $this->container['estado_civil'] = isset($data['estado_civil']) ? $data['estado_civil'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['clave_elector_ife'] = isset($data['clave_elector_ife']) ? $data['clave_elector_ife'] : null;
        $this->container['numero_dependientes'] = isset($data['numero_dependientes']) ? $data['numero_dependientes'] : null;
        $this->container['fecha_defuncion'] = isset($data['fecha_defuncion']) ? $data['fecha_defuncion'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['apellido_paterno'] === null) {
            $invalidProperties[] = "'apellido_paterno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_paterno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['apellido_paterno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['apellido_materno'] === null) {
            $invalidProperties[] = "'apellido_materno' can't be null";
        }
        if ((mb_strlen($this->container['apellido_materno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 30.";
        }
        if ((mb_strlen($this->container['apellido_materno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['primer_nombre'] === null) {
            $invalidProperties[] = "'primer_nombre' can't be null";
        }
        if ((mb_strlen($this->container['primer_nombre']) > 50)) {
            $invalidProperties[] = "invalid value for 'primer_nombre', the character length must be smaller than or equal to 50.";
        }
        if ((mb_strlen($this->container['primer_nombre']) < 0)) {
            $invalidProperties[] = "invalid value for 'primer_nombre', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) > 50)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be smaller than or equal to 50.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) < 0)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['fecha_nacimiento'] === null) {
            $invalidProperties[] = "'fecha_nacimiento' can't be null";
        }
        if ($this->container['rfc'] === null) {
            $invalidProperties[] = "'rfc' can't be null";
        }
        if ((mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) > 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be smaller than or equal to 18.";
        }
        if ($this->container['nacionalidad'] === null) {
            $invalidProperties[] = "'nacionalidad' can't be null";
        }
        if ((mb_strlen($this->container['nacionalidad']) > 2)) {
            $invalidProperties[] = "invalid value for 'nacionalidad', the character length must be smaller than or equal to 2.";
        }
        if ((mb_strlen($this->container['nacionalidad']) < 0)) {
            $invalidProperties[] = "invalid value for 'nacionalidad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_elector_ife']) && (mb_strlen($this->container['clave_elector_ife']) > 20)) {
            $invalidProperties[] = "invalid value for 'clave_elector_ife', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['clave_elector_ife']) && (mb_strlen($this->container['clave_elector_ife']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_elector_ife', the character length must be bigger than or equal to 0.";
        }
        if ($this->container['domicilio'] === null) {
            $invalidProperties[] = "'domicilio' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if ((mb_strlen($apellido_paterno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaPeticion., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($apellido_paterno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if ((mb_strlen($apellido_materno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaPeticion., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($apellido_materno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getApellidoAdicional()
    {
        return $this->container['apellido_adicional'];
    }
    
    public function setApellidoAdicional($apellido_adicional)
    {
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling PersonaPeticion., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['apellido_adicional'] = $apellido_adicional;
        return $this;
    }
    
    public function getPrimerNombre()
    {
        return $this->container['primer_nombre'];
    }
    
    public function setPrimerNombre($primer_nombre)
    {
        if ((mb_strlen($primer_nombre) > 50)) {
            throw new \InvalidArgumentException('invalid length for $primer_nombre when calling PersonaPeticion., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($primer_nombre) < 0)) {
            throw new \InvalidArgumentException('invalid length for $primer_nombre when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['primer_nombre'] = $primer_nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) > 50)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling PersonaPeticion., must be smaller than or equal to 50.');
        }
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) < 0)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if ((mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling PersonaPeticion., must be smaller than or equal to 13.');
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        if (!is_null($curp) && (mb_strlen($curp) > 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling PersonaPeticion., must be smaller than or equal to 18.');
        }
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNacionalidad()
    {
        return $this->container['nacionalidad'];
    }
    
    public function setNacionalidad($nacionalidad)
    {
        if ((mb_strlen($nacionalidad) > 2)) {
            throw new \InvalidArgumentException('invalid length for $nacionalidad when calling PersonaPeticion., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($nacionalidad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nacionalidad when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['nacionalidad'] = $nacionalidad;
        return $this;
    }
    
    public function getResidencia()
    {
        return $this->container['residencia'];
    }
    
    public function setResidencia($residencia)
    {
        $this->container['residencia'] = $residencia;
        return $this;
    }
    
    public function getEstadoCivil()
    {
        return $this->container['estado_civil'];
    }
    
    public function setEstadoCivil($estado_civil)
    {
        $this->container['estado_civil'] = $estado_civil;
        return $this;
    }
    
    public function getSexo()
    {
        return $this->container['sexo'];
    }
    
    public function setSexo($sexo)
    {
        $this->container['sexo'] = $sexo;
        return $this;
    }
    
    public function getClaveElectorIfe()
    {
        return $this->container['clave_elector_ife'];
    }
    
    public function setClaveElectorIfe($clave_elector_ife)
    {
        if (!is_null($clave_elector_ife) && (mb_strlen($clave_elector_ife) > 20)) {
            throw new \InvalidArgumentException('invalid length for $clave_elector_ife when calling PersonaPeticion., must be smaller than or equal to 20.');
        }
        if (!is_null($clave_elector_ife) && (mb_strlen($clave_elector_ife) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_elector_ife when calling PersonaPeticion., must be bigger than or equal to 0.');
        }
        $this->container['clave_elector_ife'] = $clave_elector_ife;
        return $this;
    }
    
    public function getNumeroDependientes()
    {
        return $this->container['numero_dependientes'];
    }
    
    public function setNumeroDependientes($numero_dependientes)
    {
        $this->container['numero_dependientes'] = $numero_dependientes;
        return $this;
    }
    
    public function getFechaDefuncion()
    {
        return $this->container['fecha_defuncion'];
    }
    
    public function setFechaDefuncion($fecha_defuncion)
    {
        $this->container['fecha_defuncion'] = $fecha_defuncion;
        return $this;
    }
    
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }
    
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;
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
