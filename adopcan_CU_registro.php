<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/registro");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "nombre"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "apellido");//fasunto1 
$element[2] = $webdriver->findElementBy(LocatorStrategy::name, "email");//consultarConstancia 
$element[3] = $webdriver->findElementBy(LocatorStrategy::name, "password");
$element[4] = $webdriver->findElementBy(LocatorStrategy::name, "retype_password");

if (!is_null($element)) {
	$element[0]->sendKeys(array("nombre") );
    $element[1]->sendKeys(array("apellido") );
    $element[2]->sendKeys(array("xxxxxxxx") );
    $element[3]->sendKeys(array("clave1") );
    $element[4]->sendKeys(array("clave2") );
    $element[4]->submit();

    sleep(1);
    $element[0]->clear();
    $element[1]->clear();
    $element[2]->clear();
    $element[3]->clear();
    $element[4]->clear();

    sleep(1);
    $element[0]->sendKeys(array("juan") );
    $element[1]->sendKeys(array("perez") );
    $element[2]->sendKeys(array("email@gmail.com") );
    $element[3]->sendKeys(array("clave1") );
    $element[4]->sendKeys(array("clave1") );
    $element[4]->submit();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>