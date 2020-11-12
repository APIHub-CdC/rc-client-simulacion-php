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
        $x_full_report = true;
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
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            print_r($result);
            echo "testGetFullReporte finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function testGetReporte()
    {
        $x_full_report = false;
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
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            print_r($result);
            echo "testGetReporte finished\n";
            return $result->getFolioConsulta();
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetReporte
     */
    public function testGetConsultas($folioConsulta)
    {
        try {
            $result = $this->apiInstance->getConsultas($folioConsulta, $this->x_api_key);
            echo "testGetConsultas finished\n";
            $this->assertTrue($result->getConsultas()!==null);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetConsultas: ', $e->getMessage(), PHP_EOL;
        }
        
    }
    
    /**
     * @depends testGetReporte
     */
    public function testGetCreditos($folioConsulta)
    {
        try {
            $result = $this->apiInstance->getCreditos($folioConsulta, $this->x_api_key);
            echo "testGetCreditos finished\n";
            $this->assertTrue($result->getCreditos()!==null);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetCreditos: ', $e->getMessage(), PHP_EOL;
        }
    }
    
    /**
     * @depends testGetReporte
     */
    public function testGetDomicilios($folioConsulta)
    {
        try {
            $result = $this->apiInstance->getDomicilios($folioConsulta, $this->x_api_key);
            echo "testGetDomicilios finished\n";
            $this->assertTrue($result->getDomicilios()!==null);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetDomicilios: ', $e->getMessage(), PHP_EOL;
        }
    }
    
    /**
     * @depends testGetReporte
     */
    public function testGetEmpleos($folioConsulta)
    {
        try {
            $result = $this->apiInstance->getEmpleos($folioConsulta, $this->x_api_key);
            echo "testGetEmpleos finished\n";
            $this->assertTrue($result->getEmpleos()!==null);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetEmpleos: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * @depends testGetReporte
     */
    public function testGetMensajes($folioConsulta)
    {
        try {
            $result = $this->apiInstance->getMensajes($folioConsulta, $this->x_api_key);
            echo "testGetMensajes finished\n";
            $this->assertTrue($result->getMensajes()!==null);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling ApiTest->testGetMensajes: ', $e->getMessage(), PHP_EOL;
        }
    }
}
