<?php

namespace RcSimulacionClientPhp\Client\Model;
use \RcSimulacionClientPhp\Client\ObjectSerializer;

class CatalogoFrecuenciaPago
{
    
    const A = 'A';
    const B = 'B';
    const C = 'C';
    const D = 'D';
    const E = 'E';
    const M = 'M';
    const Q = 'Q';
    const R = 'R';
    const S = 'S';
    const T = 'T';
    const U = 'U';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::A,
            self::B,
            self::C,
            self::D,
            self::E,
            self::M,
            self::Q,
            self::R,
            self::S,
            self::T,
            self::U,
        ];
    }
}
