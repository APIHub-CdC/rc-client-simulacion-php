<?php

namespace RcSimulacionClientPhp\Client\Model;
use \RcSimulacionClientPhp\Client\ObjectSerializer;

class CatalogoRazones
{
    
    const A0 = 'A0';
    const A1 = 'A1';
    const A2 = 'A2';
    const A3 = 'A3';
    const A4 = 'A4';
    const A5 = 'A5';
    const A6 = 'A6';
    const A7 = 'A7';
    const A8 = 'A8';
    const A9 = 'A9';
    const B0 = 'B0';
    const B1 = 'B1';
    const B2 = 'B2';
    const B3 = 'B3';
    const B4 = 'B4';
    const B5 = 'B5';
    const B6 = 'B6';
    const D0 = 'D0';
    const D1 = 'D1';
    const D2 = 'D2';
    const D3 = 'D3';
    const D4 = 'D4';
    const D5 = 'D5';
    const D6 = 'D6';
    const D7 = 'D7';
    const D8 = 'D8';
    const D9 = 'D9';
    const E0 = 'E0';
    const E1 = 'E1';
    const E2 = 'E2';
    const E3 = 'E3';
    const E4 = 'E4';
    const E5 = 'E5';
    const E6 = 'E6';
    const F0 = 'F0';
    const F1 = 'F1';
    const F2 = 'F2';
    const F3 = 'F3';
    const F4 = 'F4';
    const F5 = 'F5';
    const F6 = 'F6';
    const F7 = 'F7';
    const F8 = 'F8';
    const F9 = 'F9';
    const G0 = 'G0';
    const G1 = 'G1';
    const G2 = 'G2';
    const G3 = 'G3';
    const G4 = 'G4';
    const G5 = 'G5';
    const G6 = 'G6';
    const J0 = 'J0';
    const J1 = 'J1';
    const J2 = 'J2';
    const J3 = 'J3';
    const J4 = 'J4';
    const J5 = 'J5';
    const J6 = 'J6';
    const J7 = 'J7';
    const J8 = 'J8';
    const J9 = 'J9';
    const K0 = 'K0';
    const K1 = 'K1';
    const K2 = 'K2';
    const K3 = 'K3';
    const K4 = 'K4';
    const K5 = 'K5';
    const K6 = 'K6';
    const K7 = 'K7';
    const K8 = 'K8';
    const K9 = 'K9';
    const M0 = 'M0';
    const M1 = 'M1';
    const M2 = 'M2';
    const M3 = 'M3';
    const M4 = 'M4';
    const M5 = 'M5';
    const M6 = 'M6';
    const M7 = 'M7';
    const M8 = 'M8';
    const M9 = 'M9';
    const N0 = 'N0';
    const N1 = 'N1';
    const N2 = 'N2';
    const N3 = 'N3';
    const N4 = 'N4';
    const N5 = 'N5';
    const N6 = 'N6';
    const N7 = 'N7';
    const N8 = 'N8';
    const P0 = 'P0';
    const P1 = 'P1';
    const P2 = 'P2';
    const P3 = 'P3';
    const P5 = 'P5';
    const P6 = 'P6';
    const P7 = 'P7';
    const P8 = 'P8';
    const P9 = 'P9';
    const Q0 = 'Q0';
    const Q1 = 'Q1';
    const R0 = 'R0';
    const R1 = 'R1';
    const R2 = 'R2';
    const R3 = 'R3';
    const R4 = 'R4';
    const R5 = 'R5';
    const R6 = 'R6';
    const R7 = 'R7';
    const R9 = 'R9';
    const S0 = 'S0';
    const S1 = 'S1';
    const S2 = 'S2';
    const T0 = 'T0';
    const T1 = 'T1';
    const T2 = 'T2';
    const T3 = 'T3';
    const T4 = 'T4';
    const T5 = 'T5';
    const T6 = 'T6';
    const T7 = 'T7';
    const T8 = 'T8';
    const T9 = 'T9';
    const U0 = 'U0';
    const U1 = 'U1';
    const U2 = 'U2';
    const U4 = 'U4';
    const U5 = 'U5';
    const U6 = 'U6';
    const U7 = 'U7';
    const U8 = 'U8';
    const U9 = 'U9';
    const V0 = 'V0';
    const V1 = 'V1';
    const V3 = 'V3';
    const V4 = 'V4';
    const W3 = 'W3';
    const W4 = 'W4';
    const W5 = 'W5';
    const W6 = 'W6';
    const W7 = 'W7';
    const W9 = 'W9';
    const X0 = 'X0';
    const C1 = 'C1';
    const C2 = 'C2';
    const C3 = 'C3';
    const C4 = 'C4';
    const C5 = 'C5';
    const SC = 'SC';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::A0,
            self::A1,
            self::A2,
            self::A3,
            self::A4,
            self::A5,
            self::A6,
            self::A7,
            self::A8,
            self::A9,
            self::B0,
            self::B1,
            self::B2,
            self::B3,
            self::B4,
            self::B5,
            self::B6,
            self::D0,
            self::D1,
            self::D2,
            self::D3,
            self::D4,
            self::D5,
            self::D6,
            self::D7,
            self::D8,
            self::D9,
            self::E0,
            self::E1,
            self::E2,
            self::E3,
            self::E4,
            self::E5,
            self::E6,
            self::F0,
            self::F1,
            self::F2,
            self::F3,
            self::F4,
            self::F5,
            self::F6,
            self::F7,
            self::F8,
            self::F9,
            self::G0,
            self::G1,
            self::G2,
            self::G3,
            self::G4,
            self::G5,
            self::G6,
            self::J0,
            self::J1,
            self::J2,
            self::J3,
            self::J4,
            self::J5,
            self::J6,
            self::J7,
            self::J8,
            self::J9,
            self::K0,
            self::K1,
            self::K2,
            self::K3,
            self::K4,
            self::K5,
            self::K6,
            self::K7,
            self::K8,
            self::K9,
            self::M0,
            self::M1,
            self::M2,
            self::M3,
            self::M4,
            self::M5,
            self::M6,
            self::M7,
            self::M8,
            self::M9,
            self::N0,
            self::N1,
            self::N2,
            self::N3,
            self::N4,
            self::N5,
            self::N6,
            self::N7,
            self::N8,
            self::P0,
            self::P1,
            self::P2,
            self::P3,
            self::P5,
            self::P6,
            self::P7,
            self::P8,
            self::P9,
            self::Q0,
            self::Q1,
            self::R0,
            self::R1,
            self::R2,
            self::R3,
            self::R4,
            self::R5,
            self::R6,
            self::R7,
            self::R9,
            self::S0,
            self::S1,
            self::S2,
            self::T0,
            self::T1,
            self::T2,
            self::T3,
            self::T4,
            self::T5,
            self::T6,
            self::T7,
            self::T8,
            self::T9,
            self::U0,
            self::U1,
            self::U2,
            self::U4,
            self::U5,
            self::U6,
            self::U7,
            self::U8,
            self::U9,
            self::V0,
            self::V1,
            self::V3,
            self::V4,
            self::W3,
            self::W4,
            self::W5,
            self::W6,
            self::W7,
            self::W9,
            self::X0,
            self::C1,
            self::C2,
            self::C3,
            self::C4,
            self::C5,
            self::SC,
        ];
    }
}
