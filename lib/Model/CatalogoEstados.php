<?php

namespace RC\Simulacion\MX\Client\Model;
use \RC\Simulacion\MX\Client\ObjectSerializer;

class CatalogoEstados
{
    
    const AGS = 'AGS';
    const BC = 'BC';
    const BCS = 'BCS';
    const CAMP = 'CAMP';
    const COAH = 'COAH';
    const COL = 'COL';
    const CHIS = 'CHIS';
    const CHIH = 'CHIH';
    const DF = 'DF';
    const CDMX = 'CDMX';
    const DGO = 'DGO';
    const GTO = 'GTO';
    const GRO = 'GRO';
    const HGO = 'HGO';
    const JAL = 'JAL';
    const MEX = 'MEX';
    const MICH = 'MICH';
    const MOR = 'MOR';
    const NAY = 'NAY';
    const NL = 'NL';
    const OAX = 'OAX';
    const PUE = 'PUE';
    const QRO = 'QRO';
    const QROO = 'QROO';
    const SLP = 'SLP';
    const SIN = 'SIN';
    const SON = 'SON';
    const TAB = 'TAB';
    const TAMP = 'TAMP';
    const TLAX = 'TLAX';
    const VER = 'VER';
    const YUC = 'YUC';
    const ZAC = 'ZAC';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::AGS,
            self::BC,
            self::BCS,
            self::CAMP,
            self::COAH,
            self::COL,
            self::CHIS,
            self::CHIH,
            self::DF,
            self::CDMX,
            self::DGO,
            self::GTO,
            self::GRO,
            self::HGO,
            self::JAL,
            self::MEX,
            self::MICH,
            self::MOR,
            self::NAY,
            self::NL,
            self::OAX,
            self::PUE,
            self::QRO,
            self::QROO,
            self::SLP,
            self::SIN,
            self::SON,
            self::TAB,
            self::TAMP,
            self::TLAX,
            self::VER,
            self::YUC,
            self::ZAC,
        ];
    }
}
