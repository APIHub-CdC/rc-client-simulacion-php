<?php

namespace RcSimulacionClientPhp\Client;

use \RcSimulacionClientPhp\Client\Configuration;
use \RcSimulacionClientPhp\Client\ApiException;
use \RcSimulacionClientPhp\Client\ObjectSerializer;

class ReporteDeCrditoApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $config = new \RcSimulacionClientPhp\Client\Configuration();
        $config->setHost('the_url');
        $client = new \GuzzleHttp\Client(['verify'=>false]);
        $this->apiInstance = new \RcSimulacionClientPhp\Client\Api\ReporteDeCrditoApi($client, $config);
        $this->x_api_key = "your_api_key";
        
    }

    public function testGetFullReporte()
    {
        $x_full_report = true;
        $request = new \RcSimulacionClientPhp\Client\Model\PersonaPeticion();
        
        $request->setPrimerNombre("xxxxx");
        $request->setApellidoPaterno("xxxxx");
        $request->setApellidoMaterno("xxxxx");
        $request->setRfc("xxxxx");
        $request->setFechaNacimiento("yyyy-MM-dd");
        $request->setNacionalidad("MX");

        $domicilio = new \RcSimulacionClientPhp\Client\Model\DomicilioPeticion();
        $domicilio->setDireccion("xxxxx");
        $domicilio->setColoniaPoblacion("xxxxx");
        $domicilio->setCiudad("xxxxx");
        $domicilio->setCp("xxxxx");
        $domicilio->setDelegacionMunicipio("xxxxx");
        $domicilio->setEstado("DF");
        $request->setDomicilio($domicilio); 
        
        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            echo "testGetFullReporte finished\n";
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoConsolidadoApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }

    public function testGetReporte()
    {
        $x_full_report = false;
        $request = new \RcSimulacionClientPhp\Client\Model\PersonaPeticion();
        
        $request->setPrimerNombre("xxxxx");
        $request->setApellidoPaterno("xxxxx");
        $request->setApellidoMaterno("xxxxx");
        $request->setRfc("xxxxx");
        $request->setFechaNacimiento("yyyy-MM-dd");
        $request->setNacionalidad("MX");

        $domicilio = new \RcSimulacionClientPhp\Client\Model\DomicilioPeticion();
        $domicilio->setDireccion("xxxxx");
        $domicilio->setColoniaPoblacion("xxxxx");
        $domicilio->setCiudad("xxxxx");
        $domicilio->setCp("xxxxx");
        $domicilio->setDelegacionMunicipio("xxxxx");
        $domicilio->setEstado("DF");
        $request->setDomicilio($domicilio); 
        

        try {
            $result = $this->apiInstance->getReporte($this->x_api_key, $request, $x_full_report);
            $this->assertNotNull($result);
            echo "testGetReporte finished\n";
            return $result->getFolioConsulta();
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoConsolidadoApi->getReporte: ', $e->getMessage(), PHP_EOL;
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
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getReporte: ', $e->getMessage(), PHP_EOL;
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
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getReporte: ', $e->getMessage(), PHP_EOL;
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
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getReporte: ', $e->getMessage(), PHP_EOL;
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
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getReporte: ', $e->getMessage(), PHP_EOL;
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
        } catch (Exception $e) {
            echo 'Exception when calling ReporteDeCrditoApi->getReporte: ', $e->getMessage(), PHP_EOL;
        }
    }
}
