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
    $element[0]->sendKeys(array("juan") );
    $element[1]->sendKeys(array("perez") );
    $element[2]->sendKeys(array("mail@gmail.com") );
    $element[3]->sendKeys(array("claveroja1") );
    $element[4]->sendKeys(array("claveroja1") );
    $element[4]->submit();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>