<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/login");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "username"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "password");//fasunto1 
//$element[2] = $webdriver->findElementBy(LocatorStrategy::linkText, "¡Registrate!");

if (!is_null($element)) {
    $element[0]->sendKeys(array("xxxxxxxxx") );
    sleep(1);
    $element[1]->sendKeys(array("yyyyyyyxxx") );
    
    $element[0]->clear();
    $element[0]->sendKeys(array("mail@gmail.com") );
    $element[1]->clear();
    sleep(1);
    $element[1]->sendKeys(array("claveroja1") );
    $element[1]->submit();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>