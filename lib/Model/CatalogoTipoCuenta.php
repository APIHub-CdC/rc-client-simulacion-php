<?php

namespace RC\Simulacion\MX\Client\Model;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class CatalogoTipoCuenta
{
    
    const F = 'F';
    const H = 'H';
    const L = 'L';
    const R = 'R';
    const Q = 'Q';
    const A = 'A';
    const E = 'E';
    const P = 'P';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::F,
            self::H,
            self::L,
            self::R,
            self::Q,
            self::A,
            self::E,
            self::P,
        ];
    }
}
