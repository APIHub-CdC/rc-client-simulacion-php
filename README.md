# Reporte de crédito simulación

<p>Esta API simula el reporte del historial crediticio, el cumplimiento de pago de los compromisos que la persona ha adquirido con entidades financieras, no financieras e instituciones comerciales que dan crédito o participan en actividades afines al crédito.<br/><img src='https://www.circulodecredito.com.mx/assets/img/logocirculo.png' height='37' width='100'/></p><br/>

## Requisitos

PHP 7.1 ó superior

### Dependencias adicionales
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```
- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Agregar el producto a la aplicación

Al iniciar sesión seguir os siguientes pasos:

 1. Dar clic en la sección "**Mis aplicaciones**".
 2. Seleccionar la aplicación.
 3. Ir a la pestaña de "**Editar '@tuApp**' ".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/edit_applications.jpg" width="900">
    </p>
 4. Al abrirse la ventana emergente, seleccionar el producto.
 5. Dar clic en el botón "**Guardar App**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/selected_product.jpg" width="400">
    </p>

### Paso 2. Capturar los datos de la petición

Los siguientes datos a modificar se encuentran en ***test/Api/ReporteDeCrditoApiTest.php***

Es importante contar con el setUp() que se encargará de inicializar la url. Modificar la URL ***('the_url')*** de la petición del objeto ***$config***, como se muestra en el siguiente fragmento de código:

```php
   public function setUp()
    {
        $config = new \RcSimulacionClientPhp\Client\Configuration();
        $config->setHost('the_url');
        $client = new \GuzzleHttp\Client(['verify'=>false]);
        $this->apiInstance = new \RcSimulacionClientPhp\Client\Api\ReporteDeCrditoApi($client, $config);
        $this->x_api_key = "your_api_key";
        
    }
```
```php

<?php
/**
* Este es el método que se será ejecutado en la prueba ubicado en path/to/repository/test/Api/ReporteDeCrditoConsolidadoApiTest.php
*/
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
?>
```
## Pruebas unitarias

Para ejecutar las pruebas unitarias:

```sh
./vendor/bin/phpunit
```

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
