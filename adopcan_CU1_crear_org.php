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

    // Una vez logueado, al entrar por primera vez registra la organización.
    $element[3] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    $element[3] = $webdriver->findElementBy(LocatorStrategy::name, "direccion");
    $element[4] = $webdriver->findElementBy(LocatorStrategy::name, "telefono");
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "email"); 
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "website"); //submit
    $element[7] = $webdriver->findElementBy(LocatorStrategy::tagName, "button");
    
    // Se cargan datos erróneos.
    $element[2]->sendKeys(array(" "));
    $element[3]->sendKeys(array(" "));
    $element[4]->sendKeys(array("telefono"));
    $element[5]->sendKeys(array("anymail."));
    $element[6]->sendKeys(array("anysite"));
    $element[7]->click();

    sleep(2);
    //$webdriver->get("http://www.adopcan.com/admin/organizaciones");
    // Se cargan datos correctos.
    $element[2]->sendKeys(array("Adoptar "));
    $element[3]->sendKeys(array("Calle 51"));
     $element[4]->clear();
    $element[4]->sendKeys(array("555-5555"));
    $element[5]->clear();
    $element[5]->sendKeys(array("mail@gmail.com"));
    $element[6]->clear();
    $element[6]->sendKeys(array("www.anysite.com"));
    $element[6]->submit();
}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>