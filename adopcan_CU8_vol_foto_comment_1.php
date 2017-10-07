<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/login");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "username"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "password");//fasunto1 

if (!is_null($element)) {
    $element[0]->sendKeys(array("alcidesarriola@hotmail.com") );
    sleep(1);
    $element[1]->sendKeys(array("alcidesarriola") );    
    $element[1]->submit();

    // Una vez logueado, selecciono el link.
    $element[2] = $webdriver->findElementBy(LocatorStrategy::linkText, "Ver");
    // Hago click.   
    $element[2]->click();
    sleep(1);

    // Selecciono editar Animales.
    $element[3] = $webdriver->findElementBy(LocatorStrategy::linkText, "Animales");
    // Hago click.   
    $element[3]->click();
    sleep(1);

    // Selecciono editar Animales.
    $element[4] = $webdriver->findElementBy(LocatorStrategy::linkText, "Editar");
    // Hago click.   
    $element[4]->click();
    sleep(1);

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    // Hago click.   
    $element[5]->clear(); 
    sleep(1);

    // No lleno el campo 'Estado'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "estado");
    // Hago click.   
    $element[6]->sendKeys(array(''));  
    $element[6]->click();
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "sexo");
    // Hago click.   
    //$element[7]->click();
    $element[7]->sendKeys(array(0)); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "edad");
    // Hago click.   
    $element[8]->clear(); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::name, "castrado");
    // Hago click.   
    $element[9]->sendKeys(array("1")); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[10] = $webdriver->findElementBy(LocatorStrategy::name, "color");
    // Hago click.   
    $element[10]->click();
    $element[10]->sendKeys(array(""));  
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[11] = $webdriver->findElementBy(LocatorStrategy::name, "necesidades");
    // Hago click.   
    $element[11]->clear(); 
    sleep(1);

    $element[12] = $webdriver->findElementBy(LocatorStrategy::name, "dieta");
    // Hago click.   
    $element[12]->clear(); 
    sleep(1);

    $element[13] = $webdriver->findElementBy(LocatorStrategy::name, "nombre_anterior");
    // Hago click.   
    $element[13]->clear(); 
    sleep(1);

    $element[14] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_ingreso");
    // Hago click.   
    $element[14]->sendKeys(array("xxxxxxxx") ); 
    sleep(1);

    $element[15] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_adopcion");
    // Hago click.   
    $element[15]->sendKeys(array("xxxxxxxxxx") ); 
    sleep(1);

    $element[16] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_control");
    // Hago click.   
    $element[16]->sendKeys(array("xxxxxxxx") ); 
    sleep(1);

    $element[17] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_fallecimiento");
    // Hago click.   
    $element[17]->sendKeys(array("xxxxxx") ); 
    sleep(1);

    $element[18] = $webdriver->findElementBy(LocatorStrategy::name, "motivo_fallecimiento");
    // Hago click.   
    $element[18]->sendKeys(array("") ); 
    sleep(1);

    //
    $element[19] = $webdriver->findElementBy(LocatorStrategy::name, "notas");
    // Hago click.   
    $element[19]->sendKeys(array("") ); 
    sleep(1);

    // Subo 'fotos'.
    /*$element[20] = $webdriver->findElementBy(LocatorStrategy::name, "fotos");
    // Hago .   
    $element[20]->click();
    $element[20]->sendKeys(array("el mejor.jpg") ); 
    sleep(1);*/

    //fotos
    $element[20] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");

    $element[20]->click();

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    // Hago click.   
    $element[5]->sendKeys(array("Jano2")); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "edad");
    // Hago click.   
    $element[8]->sendKeys(array("4")); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::name, "castrado");
    // Hago click.   
    $element[9]->sendKeys(array("0")); 
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[10] = $webdriver->findElementBy(LocatorStrategy::name, "color");
    // Hago click.   
    $element[10]->click();
    $element[10]->sendKeys(array("Manchado"));  
    sleep(1);

    // No lleno el campo 'Editar'.
    $element[11] = $webdriver->findElementBy(LocatorStrategy::name, "necesidades");
    // Hago click.   
    $element[11]->clear(); 
    sleep(1);

    $element[12] = $webdriver->findElementBy(LocatorStrategy::name, "dieta");
    // Hago click.   
    $element[12]->clear(); 
    sleep(1);

    $element[13] = $webdriver->findElementBy(LocatorStrategy::name, "nombre_anterior");
    // Hago click.   
    $element[13]->clear();
    $element[13]->sendKeys(array("Jano")); 
    sleep(1);

    $element[14] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_ingreso");
    // Hago click.   
    $element[14]->clear(); 
    sleep(1);

    $element[15] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_adopcion");
    // Hago click.   
    $element[15]->clear(); 
    sleep(1);

    $element[16] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_control");
    // Hago click.   
    $element[16]->clear();
    sleep(1);

    $element[17] = $webdriver->findElementBy(LocatorStrategy::name, "fecha_fallecimiento");
    // Hago click.   
    $element[17]->clear(); 
    sleep(1);

    $element[18] = $webdriver->findElementBy(LocatorStrategy::name, "motivo_fallecimiento");
    // Hago click.   
    $element[18]->sendKeys(array("") ); 
    sleep(1);

    //
    $element[19] = $webdriver->findElementBy(LocatorStrategy::name, "notas");
    // Hago click.   
    $element[19]->sendKeys(array("") ); 
    sleep(1);

    //fotos
    $element[20] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");

    $element[20]->click();

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>