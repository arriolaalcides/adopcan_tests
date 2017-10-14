<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/search");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "sexo"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "edad");//fasunto1 
$element[2] = $webdriver->findElementBy(LocatorStrategy::name, "color");//consultarConstancia 
$element[3] = $webdriver->findElementBy(LocatorStrategy::name, "castrado");
$element[4] = $webdriver->findElementBy(LocatorStrategy::name, "search");

if (!is_null($element)) {
    /*$element[0]->sendKeys(array("Macho") );
    $element[0]->click();
    sleep(2);
    $element[1]->sendKeys(array("3-6") );
    $element[2]->sendKeys(array("Manchado") );
    $element[3]->click();
    $element[4]->click();

    $element[0]->clear();
    $element[1]->clear();
    $element[2]->clear();*/

    $element[0]->sendKeys(array("Macho") );
    $element[0]->click();
    $element[1]->sendKeys(array("0-2") );
    $element[2]->sendKeys(array("") );
    $element[3]->click();
    sleep(1);
    $element[4]->click();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>