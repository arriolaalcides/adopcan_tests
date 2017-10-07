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
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "fecha");
    // Hago click.   
    $element[5]->sendKeys(array("xxxxxx")); 
    sleep(1);

    // No lleno el campo 'Estado'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "lugar");
    // Hago click.   
    $element[6]->clear();
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "descripcion");
    // Hago click.    
    $element[7]->clear(); 
    sleep(1);
    $element[7]->submit();

    //fotos
    /*$element[8] = $webdriver->findElementBy(LocatorStrategy::className, "btn");

    $element[8]->click();
    sleep(1);*/

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "fecha");
    // Hago click.   
    $element[5]->clear(); 
    sleep(1);
    $element[5]->sendKeys(array("07/10/2017 16:35")); 
    sleep(1);

    // No lleno el campo 'Estado'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "lugar");
    // Hago click.   
    $element[6]->sendKeys(array("Capital Federal")); 
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "descripcion");
    // Hago click.    
    $element[7]->sendKeys(array("Se adopta desde nuestro refugio"));
    sleep(1);

    //fotos
    $element[8] = $webdriver->findElementBy(LocatorStrategy::className, "btn");

    $element[8]->click();

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>