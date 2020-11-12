<?php

namespace RC\Simulacion\MX\Client\Model;

use \ArrayAccess;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class Credito implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Credito';
    
    protected static $apihubTypes = [
        'fecha_actualizacion' => 'string',
        'registro_impugnado' => 'int',
        'clave_otorgante' => 'string',
        'nombre_otorgante' => 'string',
        'cuenta_actual' => 'string',
        'tipo_responsabilidad' => '\RC\Simulacion\MX\Client\Model\CatalogoTipoResponsabilidad',
        'tipo_cuenta' => '\RC\Simulacion\MX\Client\Model\CatalogoTipoCuenta',
        'tipo_credito' => '\RC\Simulacion\MX\Client\Model\CatalogoTipoCredito',
        'clave_unidad_monetaria' => '\RC\Simulacion\MX\Client\Model\CatalogoMoneda',
        'valor_activo_valuacion' => 'int',
        'numero_pagos' => 'int',
        'frecuencia_pagos' => '\RC\Simulacion\MX\Client\Model\CatalogoFrecuenciaPago',
        'monto_pagar' => 'float',
        'fecha_apertura_cuenta' => 'string',
        'fecha_ultimo_pago' => 'string',
        'fecha_ultima_compra' => 'string',
        'fecha_cierre_cuenta' => 'string',
        'fecha_reporte' => 'string',
        'ultima_fecha_saldo_cero' => 'string',
        'garantia' => 'string',
        'credito_maximo' => 'float',
        'saldo_actual' => 'float',
        'limite_credito' => 'float',
        'saldo_vencido' => 'float',
        'numero_pagos_vencidos' => 'int',
        'pago_actual' => 'string',
        'historico_pagos' => 'string',
        'fecha_reciente_historico_pagos' => 'string',
        'fecha_antigua_historico_pagos' => 'string',
        'clave_prevencion' => '\RC\Simulacion\MX\Client\Model\CatalogoPrevencion',
        'total_pagos_reportados' => 'int',
        'peor_atraso' => 'float',
        'fecha_peor_atraso' => 'string',
        'saldo_vencido_peor_atraso' => 'float',
        'monto_ultimo_pago' => 'double',
        'id_domicilio' => 'string',
        'servicios' => 'string',
        'can' => '\RC\Simulacion\MX\Client\Model\CAN'
    ];
    
    protected static $apihubFormats = [
        'fecha_actualizacion' => 'yyyy-MM-dd',
        'registro_impugnado' => 'int32',
        'clave_otorgante' => null,
        'nombre_otorgante' => null,
        'cuenta_actual' => null,
        'tipo_responsabilidad' => null,
        'tipo_cuenta' => null,
        'tipo_credito' => null,
        'clave_unidad_monetaria' => null,
        'valor_activo_valuacion' => 'int32',
        'numero_pagos' => 'int32',
        'frecuencia_pagos' => null,
        'monto_pagar' => 'float',
        'fecha_apertura_cuenta' => 'yyyy-MM-dd',
        'fecha_ultimo_pago' => 'yyyy-MM-dd',
        'fecha_ultima_compra' => 'yyyy-MM-dd',
        'fecha_cierre_cuenta' => 'yyyy-MM-dd',
        'fecha_reporte' => 'yyyy-MM-dd',
        'ultima_fecha_saldo_cero' => 'yyyy-MM-dd',
        'garantia' => null,
        'credito_maximo' => 'float',
        'saldo_actual' => 'float',
        'limite_credito' => 'float',
        'saldo_vencido' => 'float',
        'numero_pagos_vencidos' => 'int32',
        'pago_actual' => null,
        'historico_pagos' => null,
        'fecha_reciente_historico_pagos' => 'yyyy-MM-dd',
        'fecha_antigua_historico_pagos' => 'yyyy-MM-dd',
        'clave_prevencion' => null,
        'total_pagos_reportados' => 'int32',
        'peor_atraso' => 'float',
        'fecha_peor_atraso' => 'yyyy-MM-dd',
        'saldo_vencido_peor_atraso' => 'float',
        'monto_ultimo_pago' => 'double',
        'id_domicilio' => null,
        'servicios' => null,
        'can' => null
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
        'fecha_actualizacion' => 'fechaActualizacion',
        'registro_impugnado' => 'registroImpugnado',
        'clave_otorgante' => 'claveOtorgante',
        'nombre_otorgante' => 'nombreOtorgante',
        'cuenta_actual' => 'cuentaActual',
        'tipo_responsabilidad' => 'tipoResponsabilidad',
        'tipo_cuenta' => 'tipoCuenta',
        'tipo_credito' => 'tipoCredito',
        'clave_unidad_monetaria' => 'claveUnidadMonetaria',
        'valor_activo_valuacion' => 'valorActivoValuacion',
        'numero_pagos' => 'numeroPagos',
        'frecuencia_pagos' => 'frecuenciaPagos',
        'monto_pagar' => 'montoPagar',
        'fecha_apertura_cuenta' => 'fechaAperturaCuenta',
        'fecha_ultimo_pago' => 'fechaUltimoPago',
        'fecha_ultima_compra' => 'fechaUltimaCompra',
        'fecha_cierre_cuenta' => 'fechaCierreCuenta',
        'fecha_reporte' => 'fechaReporte',
        'ultima_fecha_saldo_cero' => 'ultimaFechaSaldoCero',
        'garantia' => 'garantia',
        'credito_maximo' => 'creditoMaximo',
        'saldo_actual' => 'saldoActual',
        'limite_credito' => 'limiteCredito',
        'saldo_vencido' => 'saldoVencido',
        'numero_pagos_vencidos' => 'numeroPagosVencidos',
        'pago_actual' => 'pagoActual',
        'historico_pagos' => 'historicoPagos',
        'fecha_reciente_historico_pagos' => 'fechaRecienteHistoricoPagos',
        'fecha_antigua_historico_pagos' => 'fechaAntiguaHistoricoPagos',
        'clave_prevencion' => 'clavePrevencion',
        'total_pagos_reportados' => 'totalPagosReportados',
        'peor_atraso' => 'peorAtraso',
        'fecha_peor_atraso' => 'fechaPeorAtraso',
        'saldo_vencido_peor_atraso' => 'saldoVencidoPeorAtraso',
        'monto_ultimo_pago' => 'montoUltimoPago',
        'id_domicilio' => 'idDomicilio',
        'servicios' => 'servicios',
        'can' => 'CAN'
    ];
    
    protected static $setters = [
        'fecha_actualizacion' => 'setFechaActualizacion',
        'registro_impugnado' => 'setRegistroImpugnado',
        'clave_otorgante' => 'setClaveOtorgante',
        'nombre_otorgante' => 'setNombreOtorgante',
        'cuenta_actual' => 'setCuentaActual',
        'tipo_responsabilidad' => 'setTipoResponsabilidad',
        'tipo_cuenta' => 'setTipoCuenta',
        'tipo_credito' => 'setTipoCredito',
        'clave_unidad_monetaria' => 'setClaveUnidadMonetaria',
        'valor_activo_valuacion' => 'setValorActivoValuacion',
        'numero_pagos' => 'setNumeroPagos',
        'frecuencia_pagos' => 'setFrecuenciaPagos',
        'monto_pagar' => 'setMontoPagar',
        'fecha_apertura_cuenta' => 'setFechaAperturaCuenta',
        'fecha_ultimo_pago' => 'setFechaUltimoPago',
        'fecha_ultima_compra' => 'setFechaUltimaCompra',
        'fecha_cierre_cuenta' => 'setFechaCierreCuenta',
        'fecha_reporte' => 'setFechaReporte',
        'ultima_fecha_saldo_cero' => 'setUltimaFechaSaldoCero',
        'garantia' => 'setGarantia',
        'credito_maximo' => 'setCreditoMaximo',
        'saldo_actual' => 'setSaldoActual',
        'limite_credito' => 'setLimiteCredito',
        'saldo_vencido' => 'setSaldoVencido',
        'numero_pagos_vencidos' => 'setNumeroPagosVencidos',
        'pago_actual' => 'setPagoActual',
        'historico_pagos' => 'setHistoricoPagos',
        'fecha_reciente_historico_pagos' => 'setFechaRecienteHistoricoPagos',
        'fecha_antigua_historico_pagos' => 'setFechaAntiguaHistoricoPagos',
        'clave_prevencion' => 'setClavePrevencion',
        'total_pagos_reportados' => 'setTotalPagosReportados',
        'peor_atraso' => 'setPeorAtraso',
        'fecha_peor_atraso' => 'setFechaPeorAtraso',
        'saldo_vencido_peor_atraso' => 'setSaldoVencidoPeorAtraso',
        'monto_ultimo_pago' => 'setMontoUltimoPago',
        'id_domicilio' => 'setIdDomicilio',
        'servicios' => 'setServicios',
        'can' => 'setCan'
    ];
    
    protected static $getters = [
        'fecha_actualizacion' => 'getFechaActualizacion',
        'registro_impugnado' => 'getRegistroImpugnado',
        'clave_otorgante' => 'getClaveOtorgante',
        'nombre_otorgante' => 'getNombreOtorgante',
        'cuenta_actual' => 'getCuentaActual',
        'tipo_responsabilidad' => 'getTipoResponsabilidad',
        'tipo_cuenta' => 'getTipoCuenta',
        'tipo_credito' => 'getTipoCredito',
        'clave_unidad_monetaria' => 'getClaveUnidadMonetaria',
        'valor_activo_valuacion' => 'getValorActivoValuacion',
        'numero_pagos' => 'getNumeroPagos',
        'frecuencia_pagos' => 'getFrecuenciaPagos',
        'monto_pagar' => 'getMontoPagar',
        'fecha_apertura_cuenta' => 'getFechaAperturaCuenta',
        'fecha_ultimo_pago' => 'getFechaUltimoPago',
        'fecha_ultima_compra' => 'getFechaUltimaCompra',
        'fecha_cierre_cuenta' => 'getFechaCierreCuenta',
        'fecha_reporte' => 'getFechaReporte',
        'ultima_fecha_saldo_cero' => 'getUltimaFechaSaldoCero',
        'garantia' => 'getGarantia',
        'credito_maximo' => 'getCreditoMaximo',
        'saldo_actual' => 'getSaldoActual',
        'limite_credito' => 'getLimiteCredito',
        'saldo_vencido' => 'getSaldoVencido',
        'numero_pagos_vencidos' => 'getNumeroPagosVencidos',
        'pago_actual' => 'getPagoActual',
        'historico_pagos' => 'getHistoricoPagos',
        'fecha_reciente_historico_pagos' => 'getFechaRecienteHistoricoPagos',
        'fecha_antigua_historico_pagos' => 'getFechaAntiguaHistoricoPagos',
        'clave_prevencion' => 'getClavePrevencion',
        'total_pagos_reportados' => 'getTotalPagosReportados',
        'peor_atraso' => 'getPeorAtraso',
        'fecha_peor_atraso' => 'getFechaPeorAtraso',
        'saldo_vencido_peor_atraso' => 'getSaldoVencidoPeorAtraso',
        'monto_ultimo_pago' => 'getMontoUltimoPago',
        'id_domicilio' => 'getIdDomicilio',
        'servicios' => 'getServicios',
        'can' => 'getCan'
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
        $this->container['fecha_actualizacion'] = isset($data['fecha_actualizacion']) ? $data['fecha_actualizacion'] : null;
        $this->container['registro_impugnado'] = isset($data['registro_impugnado']) ? $data['registro_impugnado'] : null;
        $this->container['clave_otorgante'] = isset($data['clave_otorgante']) ? $data['clave_otorgante'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['cuenta_actual'] = isset($data['cuenta_actual']) ? $data['cuenta_actual'] : null;
        $this->container['tipo_responsabilidad'] = isset($data['tipo_responsabilidad']) ? $data['tipo_responsabilidad'] : null;
        $this->container['tipo_cuenta'] = isset($data['tipo_cuenta']) ? $data['tipo_cuenta'] : null;
        $this->container['tipo_credito'] = isset($data['tipo_credito']) ? $data['tipo_credito'] : null;
        $this->container['clave_unidad_monetaria'] = isset($data['clave_unidad_monetaria']) ? $data['clave_unidad_monetaria'] : null;
        $this->container['valor_activo_valuacion'] = isset($data['valor_activo_valuacion']) ? $data['valor_activo_valuacion'] : null;
        $this->container['numero_pagos'] = isset($data['numero_pagos']) ? $data['numero_pagos'] : null;
        $this->container['frecuencia_pagos'] = isset($data['frecuencia_pagos']) ? $data['frecuencia_pagos'] : null;
        $this->container['monto_pagar'] = isset($data['monto_pagar']) ? $data['monto_pagar'] : null;
        $this->container['fecha_apertura_cuenta'] = isset($data['fecha_apertura_cuenta']) ? $data['fecha_apertura_cuenta'] : null;
        $this->container['fecha_ultimo_pago'] = isset($data['fecha_ultimo_pago']) ? $data['fecha_ultimo_pago'] : null;
        $this->container['fecha_ultima_compra'] = isset($data['fecha_ultima_compra']) ? $data['fecha_ultima_compra'] : null;
        $this->container['fecha_cierre_cuenta'] = isset($data['fecha_cierre_cuenta']) ? $data['fecha_cierre_cuenta'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['ultima_fecha_saldo_cero'] = isset($data['ultima_fecha_saldo_cero']) ? $data['ultima_fecha_saldo_cero'] : null;
        $this->container['garantia'] = isset($data['garantia']) ? $data['garantia'] : null;
        $this->container['credito_maximo'] = isset($data['credito_maximo']) ? $data['credito_maximo'] : null;
        $this->container['saldo_actual'] = isset($data['saldo_actual']) ? $data['saldo_actual'] : null;
        $this->container['limite_credito'] = isset($data['limite_credito']) ? $data['limite_credito'] : null;
        $this->container['saldo_vencido'] = isset($data['saldo_vencido']) ? $data['saldo_vencido'] : null;
        $this->container['numero_pagos_vencidos'] = isset($data['numero_pagos_vencidos']) ? $data['numero_pagos_vencidos'] : null;
        $this->container['pago_actual'] = isset($data['pago_actual']) ? $data['pago_actual'] : null;
        $this->container['historico_pagos'] = isset($data['historico_pagos']) ? $data['historico_pagos'] : null;
        $this->container['fecha_reciente_historico_pagos'] = isset($data['fecha_reciente_historico_pagos']) ? $data['fecha_reciente_historico_pagos'] : null;
        $this->container['fecha_antigua_historico_pagos'] = isset($data['fecha_antigua_historico_pagos']) ? $data['fecha_antigua_historico_pagos'] : null;
        $this->container['clave_prevencion'] = isset($data['clave_prevencion']) ? $data['clave_prevencion'] : null;
        $this->container['total_pagos_reportados'] = isset($data['total_pagos_reportados']) ? $data['total_pagos_reportados'] : null;
        $this->container['peor_atraso'] = isset($data['peor_atraso']) ? $data['peor_atraso'] : null;
        $this->container['fecha_peor_atraso'] = isset($data['fecha_peor_atraso']) ? $data['fecha_peor_atraso'] : null;
        $this->container['saldo_vencido_peor_atraso'] = isset($data['saldo_vencido_peor_atraso']) ? $data['saldo_vencido_peor_atraso'] : null;
        $this->container['monto_ultimo_pago'] = isset($data['monto_ultimo_pago']) ? $data['monto_ultimo_pago'] : null;
        $this->container['id_domicilio'] = isset($data['id_domicilio']) ? $data['id_domicilio'] : null;
        $this->container['servicios'] = isset($data['servicios']) ? $data['servicios'] : null;
        $this->container['can'] = isset($data['can']) ? $data['can'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['clave_otorgante']) && (mb_strlen($this->container['clave_otorgante']) > 10)) {
            $invalidProperties[] = "invalid value for 'clave_otorgante', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['clave_otorgante']) && (mb_strlen($this->container['clave_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_otorgante', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) > 40)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['cuenta_actual']) && (mb_strlen($this->container['cuenta_actual']) > 25)) {
            $invalidProperties[] = "invalid value for 'cuenta_actual', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['cuenta_actual']) && (mb_strlen($this->container['cuenta_actual']) < 0)) {
            $invalidProperties[] = "invalid value for 'cuenta_actual', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFechaActualizacion()
    {
        return $this->container['fecha_actualizacion'];
    }
    
    public function setFechaActualizacion($fecha_actualizacion)
    {
        $this->container['fecha_actualizacion'] = $fecha_actualizacion;
        return $this;
    }
    
    public function getRegistroImpugnado()
    {
        return $this->container['registro_impugnado'];
    }
    
    public function setRegistroImpugnado($registro_impugnado)
    {
        $this->container['registro_impugnado'] = $registro_impugnado;
        return $this;
    }
    
    public function getClaveOtorgante()
    {
        return $this->container['clave_otorgante'];
    }
    
    public function setClaveOtorgante($clave_otorgante)
    {
        if (!is_null($clave_otorgante) && (mb_strlen($clave_otorgante) > 10)) {
            throw new \InvalidArgumentException('invalid length for $clave_otorgante when calling Credito., must be smaller than or equal to 10.');
        }
        if (!is_null($clave_otorgante) && (mb_strlen($clave_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_otorgante when calling Credito., must be bigger than or equal to 0.');
        }
        $this->container['clave_otorgante'] = $clave_otorgante;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) > 40)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling Credito., must be smaller than or equal to 40.');
        }
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling Credito., must be bigger than or equal to 0.');
        }
        $this->container['nombre_otorgante'] = $nombre_otorgante;
        return $this;
    }
    
    public function getCuentaActual()
    {
        return $this->container['cuenta_actual'];
    }
    
    public function setCuentaActual($cuenta_actual)
    {
        if (!is_null($cuenta_actual) && (mb_strlen($cuenta_actual) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cuenta_actual when calling Credito., must be smaller than or equal to 25.');
        }
        if (!is_null($cuenta_actual) && (mb_strlen($cuenta_actual) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cuenta_actual when calling Credito., must be bigger than or equal to 0.');
        }
        $this->container['cuenta_actual'] = $cuenta_actual;
        return $this;
    }
    
    public function getTipoResponsabilidad()
    {
        return $this->container['tipo_responsabilidad'];
    }
    
    public function setTipoResponsabilidad($tipo_responsabilidad)
    {
        $this->container['tipo_responsabilidad'] = $tipo_responsabilidad;
        return $this;
    }
    
    public function getTipoCuenta()
    {
        return $this->container['tipo_cuenta'];
    }
    
    public function setTipoCuenta($tipo_cuenta)
    {
        $this->container['tipo_cuenta'] = $tipo_cuenta;
        return $this;
    }
    
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }
    
    public function setTipoCredito($tipo_credito)
    {
        $this->container['tipo_credito'] = $tipo_credito;
        return $this;
    }
    
    public function getClaveUnidadMonetaria()
    {
        return $this->container['clave_unidad_monetaria'];
    }
    
    public function setClaveUnidadMonetaria($clave_unidad_monetaria)
    {
        $this->container['clave_unidad_monetaria'] = $clave_unidad_monetaria;
        return $this;
    }
    
    public function getValorActivoValuacion()
    {
        return $this->container['valor_activo_valuacion'];
    }
    
    public function setValorActivoValuacion($valor_activo_valuacion)
    {
        $this->container['valor_activo_valuacion'] = $valor_activo_valuacion;
        return $this;
    }
    
    public function getNumeroPagos()
    {
        return $this->container['numero_pagos'];
    }
    
    public function setNumeroPagos($numero_pagos)
    {
        $this->container['numero_pagos'] = $numero_pagos;
        return $this;
    }
    
    public function getFrecuenciaPagos()
    {
        return $this->container['frecuencia_pagos'];
    }
    
    public function setFrecuenciaPagos($frecuencia_pagos)
    {
        $this->container['frecuencia_pagos'] = $frecuencia_pagos;
        return $this;
    }
    
    public function getMontoPagar()
    {
        return $this->container['monto_pagar'];
    }
    
    public function setMontoPagar($monto_pagar)
    {
        $this->container['monto_pagar'] = $monto_pagar;
        return $this;
    }
    
    public function getFechaAperturaCuenta()
    {
        return $this->container['fecha_apertura_cuenta'];
    }
    
    public function setFechaAperturaCuenta($fecha_apertura_cuenta)
    {
        $this->container['fecha_apertura_cuenta'] = $fecha_apertura_cuenta;
        return $this;
    }
    
    public function getFechaUltimoPago()
    {
        return $this->container['fecha_ultimo_pago'];
    }
    
    public function setFechaUltimoPago($fecha_ultimo_pago)
    {
        $this->container['fecha_ultimo_pago'] = $fecha_ultimo_pago;
        return $this;
    }
    
    public function getFechaUltimaCompra()
    {
        return $this->container['fecha_ultima_compra'];
    }
    
    public function setFechaUltimaCompra($fecha_ultima_compra)
    {
        $this->container['fecha_ultima_compra'] = $fecha_ultima_compra;
        return $this;
    }
    
    public function getFechaCierreCuenta()
    {
        return $this->container['fecha_cierre_cuenta'];
    }
    
    public function setFechaCierreCuenta($fecha_cierre_cuenta)
    {
        $this->container['fecha_cierre_cuenta'] = $fecha_cierre_cuenta;
        return $this;
    }
    
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }
    
    public function setFechaReporte($fecha_reporte)
    {
        $this->container['fecha_reporte'] = $fecha_reporte;
        return $this;
    }
    
    public function getUltimaFechaSaldoCero()
    {
        return $this->container['ultima_fecha_saldo_cero'];
    }
    
    public function setUltimaFechaSaldoCero($ultima_fecha_saldo_cero)
    {
        $this->container['ultima_fecha_saldo_cero'] = $ultima_fecha_saldo_cero;
        return $this;
    }
    
    public function getGarantia()
    {
        return $this->container['garantia'];
    }
    
    public function setGarantia($garantia)
    {
        $this->container['garantia'] = $garantia;
        return $this;
    }
    
    public function getCreditoMaximo()
    {
        return $this->container['credito_maximo'];
    }
    
    public function setCreditoMaximo($credito_maximo)
    {
        $this->container['credito_maximo'] = $credito_maximo;
        return $this;
    }
    
    public function getSaldoActual()
    {
        return $this->container['saldo_actual'];
    }
    
    public function setSaldoActual($saldo_actual)
    {
        $this->container['saldo_actual'] = $saldo_actual;
        return $this;
    }
    
    public function getLimiteCredito()
    {
        return $this->container['limite_credito'];
    }
    
    public function setLimiteCredito($limite_credito)
    {
        $this->container['limite_credito'] = $limite_credito;
        return $this;
    }
    
    public function getSaldoVencido()
    {
        return $this->container['saldo_vencido'];
    }
    
    public function setSaldoVencido($saldo_vencido)
    {
        $this->container['saldo_vencido'] = $saldo_vencido;
        return $this;
    }
    
    public function getNumeroPagosVencidos()
    {
        return $this->container['numero_pagos_vencidos'];
    }
    
    public function setNumeroPagosVencidos($numero_pagos_vencidos)
    {
        $this->container['numero_pagos_vencidos'] = $numero_pagos_vencidos;
        return $this;
    }
    
    public function getPagoActual()
    {
        return $this->container['pago_actual'];
    }
    
    public function setPagoActual($pago_actual)
    {
        $this->container['pago_actual'] = $pago_actual;
        return $this;
    }
    
    public function getHistoricoPagos()
    {
        return $this->container['historico_pagos'];
    }
    
    public function setHistoricoPagos($historico_pagos)
    {
        $this->container['historico_pagos'] = $historico_pagos;
        return $this;
    }
    
    public function getFechaRecienteHistoricoPagos()
    {
        return $this->container['fecha_reciente_historico_pagos'];
    }
    
    public function setFechaRecienteHistoricoPagos($fecha_reciente_historico_pagos)
    {
        $this->container['fecha_reciente_historico_pagos'] = $fecha_reciente_historico_pagos;
        return $this;
    }
    
    public function getFechaAntiguaHistoricoPagos()
    {
        return $this->container['fecha_antigua_historico_pagos'];
    }
    
    public function setFechaAntiguaHistoricoPagos($fecha_antigua_historico_pagos)
    {
        $this->container['fecha_antigua_historico_pagos'] = $fecha_antigua_historico_pagos;
        return $this;
    }
    
    public function getClavePrevencion()
    {
        return $this->container['clave_prevencion'];
    }
    
    public function setClavePrevencion($clave_prevencion)
    {
        $this->container['clave_prevencion'] = $clave_prevencion;
        return $this;
    }
    
    public function getTotalPagosReportados()
    {
        return $this->container['total_pagos_reportados'];
    }
    
    public function setTotalPagosReportados($total_pagos_reportados)
    {
        $this->container['total_pagos_reportados'] = $total_pagos_reportados;
        return $this;
    }
    
    public function getPeorAtraso()
    {
        return $this->container['peor_atraso'];
    }
    
    public function setPeorAtraso($peor_atraso)
    {
        $this->container['peor_atraso'] = $peor_atraso;
        return $this;
    }
    
    public function getFechaPeorAtraso()
    {
        return $this->container['fecha_peor_atraso'];
    }
    
    public function setFechaPeorAtraso($fecha_peor_atraso)
    {
        $this->container['fecha_peor_atraso'] = $fecha_peor_atraso;
        return $this;
    }
    
    public function getSaldoVencidoPeorAtraso()
    {
        return $this->container['saldo_vencido_peor_atraso'];
    }
    
    public function setSaldoVencidoPeorAtraso($saldo_vencido_peor_atraso)
    {
        $this->container['saldo_vencido_peor_atraso'] = $saldo_vencido_peor_atraso;
        return $this;
    }
    
    public function getMontoUltimoPago()
    {
        return $this->container['monto_ultimo_pago'];
    }
    
    public function setMontoUltimoPago($monto_ultimo_pago)
    {
        $this->container['monto_ultimo_pago'] = $monto_ultimo_pago;
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
    
    public function getServicios()
    {
        return $this->container['servicios'];
    }
    
    public function setServicios($servicios)
    {
        $this->container['servicios'] = $servicios;
        return $this;
    }
    
    public function getCan()
    {
        return $this->container['can'];
    }
    
    public function setCan($can)
    {
        $this->container['can'] = $can;
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
