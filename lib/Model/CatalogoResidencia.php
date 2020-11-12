<?php

namespace RC\Simulacion\MX\Client\Model;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class CatalogoResidencia
{
    
    const _1 = 1;
    const _2 = 2;
    const _3 = 3;
    const _4 = 4;
    const _5 = 5;
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::_1,
            self::_2,
            self::_3,
            self::_4,
            self::_5,
        ];
    }
}
