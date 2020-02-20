<?php

namespace RcSimulacionClientPhp\Client;

class ObjectSerializer
{
    
    public static function sanitizeForSerialization($data, $type = null, $format = null)
    {
        if (is_scalar($data) || null === $data) {
            return $data;
        } elseif ($data instanceof \DateTime) {
            return ($format === 'date') ? $data->format('Y-m-d') : $data->format(\DateTime::ATOM);
        } elseif (is_array($data)) {
            foreach ($data as $property => $value) {
                $data[$property] = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif ($data instanceof \stdClass) {
            foreach ($data as $property => $value) {
                $data->$property = self::sanitizeForSerialization($value);
            }
            return $data;
        } elseif (is_object($data)) {
            $values = [];
            $formats = $data::apihubFormats();
            foreach ($data::apihubTypes() as $property => $apihubType) {
                $getter = $data::getters()[$property];
                $value = $data->$getter();
                if ($value !== null
                    && !in_array($apihubType, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)
                    && method_exists($apihubType, 'getAllowableEnumValues')
                    && !in_array($value, $apihubType::getAllowableEnumValues(), true)) {
                    $imploded = implode("', '", $apihubType::getAllowableEnumValues());
                    throw new \InvalidArgumentException("Invalid value for enum '$apihubType', must be one of: '$imploded'");
                }
                if ($value !== null) {
                    $values[$data::attributeMap()[$property]] = self::sanitizeForSerialization($value, $apihubType, $formats[$property]);
                }
            }
            return (object)$values;
        } else {
            return (string)$data;
        }
    }
    
    public static function sanitizeFilename($filename)
    {
        if (preg_match("/.*[\/\\\\](.*)$/", $filename, $match)) {
            return $match[1];
        } else {
            return $filename;
        }
    }
    
    public static function toPathValue($value)
    {
        return rawurlencode(self::toString($value));
    }
    
    public static function toQueryValue($object)
    {
        if (is_array($object)) {
            return implode(',', $object);
        } else {
            return self::toString($object);
        }
    }
    
    public static function toHeaderValue($value)
    {
        return self::toString($value);
    }
    
    public static function toFormValue($value)
    {
        if ($value instanceof \SplFileObject) {
            return $value->getRealPath();
        } else {
            return self::toString($value);
        }
    }
    
    public static function toString($value)
    {
        if ($value instanceof \DateTime) {
            return $value->format(\DateTime::ATOM);
        } else {
            return $value;
        }
    }
    
    public static function serializeCollection(array $collection, $collectionFormat, $allowCollectionFormatMulti = false)
    {
        if ($allowCollectionFormatMulti && ('multi' === $collectionFormat)) {
            return preg_replace('/%5B[0-9]+%5D=/', '=', http_build_query($collection, '', '&'));
        }
        switch ($collectionFormat) {
            case 'pipes':
                return implode('|', $collection);
            case 'tsv':
                return implode("\t", $collection);
            case 'ssv':
                return implode(' ', $collection);
            case 'csv':
            default:
                return implode(',', $collection);
        }
    }
    
    public static function deserialize($data, $class, $httpHeaders = null)
    {
        if (null === $data) {
            return null;
        } elseif (substr($class, 0, 4) === 'map[') {
            $inner = substr($class, 4, -1);
            $deserialized = [];
            if (strrpos($inner, ",") !== false) {
                $subClass_array = explode(',', $inner, 2);
                $subClass = $subClass_array[1];
                foreach ($data as $key => $value) {
                    $deserialized[$key] = self::deserialize($value, $subClass, null);
                }
            }
            return $deserialized;
        } elseif (strcasecmp(substr($class, -2), '[]') === 0) {
            $subClass = substr($class, 0, -2);
            $values = [];
            foreach ($data as $key => $value) {
                $values[] = self::deserialize($value, $subClass, null);
            }
            return $values;
        } elseif ($class === 'object') {
            settype($data, 'array');
            return $data;
        } elseif ($class === '\DateTime') {
            if (!empty($data)) {
                return new \DateTime($data);
            } else {
                return null;
            }
        } elseif (in_array($class, ['DateTime', 'bool', 'boolean', 'byte', 'double', 'float', 'int', 'integer', 'mixed', 'number', 'object', 'string', 'void'], true)) {
            settype($data, $class);
            return $data;
        } elseif ($class === '\SplFileObject') {
            /** @var \Psr\Http\Message\StreamInterface $data */
            if (array_key_exists('Content-Disposition', $httpHeaders) &&
                preg_match('/inline; filename=[\'"]?([^\'"\s]+)[\'"]?$/i', $httpHeaders['Content-Disposition'], $match)) {
                $filename = Configuration::getDefaultConfiguration()->getTempFolderPath() . DIRECTORY_SEPARATOR . self::sanitizeFilename($match[1]);
            } else {
                $filename = tempnam(Configuration::getDefaultConfiguration()->getTempFolderPath(), '');
            }
            $file = fopen($filename, 'w');
            while ($chunk = $data->read(200)) {
                fwrite($file, $chunk);
            }
            fclose($file);
            return new \SplFileObject($filename, 'r');
        } elseif (method_exists($class, 'getAllowableEnumValues')) {
            if (!in_array($data, $class::getAllowableEnumValues(), true)) {
                $imploded = implode("', '", $class::getAllowableEnumValues());
                throw new \InvalidArgumentException("Invalid value for enum '$class', must be one of: '$imploded'");
            }
            return $data;
        } else {
            $discriminator = $class::DISCRIMINATOR;
            if (!empty($discriminator) && isset($data->{$discriminator}) && is_string($data->{$discriminator})) {
                $subclass = '\RcSimulacionClientPhp\Client\Model\\' . $data->{$discriminator};
                if (is_subclass_of($subclass, $class)) {
                    $class = $subclass;
                }
            }
            $instance = new $class();
            foreach ($instance::apihubTypes() as $property => $type) {
                $propertySetter = $instance::setters()[$property];
                if (!isset($propertySetter) || !isset($data->{$instance::attributeMap()[$property]})) {
                    continue;
                }
                $propertyValue = $data->{$instance::attributeMap()[$property]};
                if (isset($propertyValue)) {
                    $instance->$propertySetter(self::deserialize($propertyValue, $type, null));
                }
            }
            return $instance;
        }
    }
}
