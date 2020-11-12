<?php

namespace RC\Simulacion\MX\Client\Model;

interface ModelInterface
{
    
    public function getModelName();
    
    public static function apihubTypes();
    
    public static function apihubFormats();
    
    public static function attributeMap();
    
    public static function setters();
    
    public static function getters();
    
    public function listInvalidProperties();
    
    public function valid();
}
