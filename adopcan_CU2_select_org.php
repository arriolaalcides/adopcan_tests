<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/login");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "username"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "password");//fasunto1 

if (!is_null($element)) {
    $element[0]->sendKeys(array("mail@gmail.com") );
    sleep(2);
    $element[1]->sendKeys(array("claveroja1") );    
    $element[1]->submit();

    // Una vez logueado, selecciono el botón.
    $element[3] = $webdriver->findElementBy(LocatorStrategy::linkText, "Ver");
        
    // Hago click.   
    $element[3]->click();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>