<?php

namespace RC\Simulacion\MX\Client;

use \GuzzleHttp\Client;

use \RC\Simulacion\MX\Client\Configuration;
use \RC\Simulacion\MX\Client\ApiException;
use \RC\Simulacion\MX\Client\ObjectSerializer;
use \RC\Simulacion\MX\Client\Api\RCApi as Instance;
use \RC\Simulacion\MX\Client\Model\PersonaPeticion;
use \RC\Simulacion\MX\Client\Model\DomicilioPeticion;

class ApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new Configuration();
        $config->setHost('the_url');
        $client = new Client();
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_api_key";
    }

    public function testGetFullReporte()
    {
        
        $request = new PersonaPeticion();
        
        $request->setPrimerNombre("JUAN");
        $request->setApellidoPaterno("PRUEBA");
        $request->setApellidoMaterno("SIETE");
        $request->setRfc("PUAC800107");
        $request->setFechaNacimiento("1980-01-07");
        $request->setNacionalidad("MX");

        $domicilio = new DomicilioPeticion();
        $domicilio->setDireccion("INSURGENTES SUR 1001");
        $domicilio->setColoniaPoblacion("INSURGENTES SUR");
        $domicilio->setCiudad("CIUDAD DE MEXICO");
        $domicilio->setCp("11230");
        $domicilio->setDelegacionMunicipio("CIUDAD DE MEXICO");
        $domicilio->setEstado("DF");
        $request->setDomicilio($domicilio); 
        
        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request);
            $this->assertNotNull($result);
            print_r($result);
            echo "testGetFullReporte finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

}
