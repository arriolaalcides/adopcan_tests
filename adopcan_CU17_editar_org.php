<?php

require_once "phpwebdriver/WebDriver.php";

$webdriver = new WebDriver("localhost", "4444");
$webdriver->connect("chrome");                            
$webdriver->get("http://www.adopcan.com/login");
$element[0] = $webdriver->findElementBy(LocatorStrategy::name, "username"); // Elemento del atributo 'name' donde agrega.
$element[1] = $webdriver->findElementBy(LocatorStrategy::name, "password");//fasunto1 

if (!is_null($element)) {
    $element[0]->sendKeys(array("mail@gmail.com") );
    sleep(1);
    $element[1]->sendKeys(array("claveroja1") );    
    $element[1]->submit();

    // Una vez logueado, selecciono el link.
    $element[2] = $webdriver->findElementBy(LocatorStrategy::linkText, "Ver");
    // Hago click.   
    $element[2]->click();
    sleep(1);

    // Selecciono editar Animales.
    $element[3] = $webdriver->findElementBy(LocatorStrategy::linkText, "Editar");
    // Hago click.   
    $element[3]->click();
    sleep(1);

    $element[4] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    $element[4]->clear();

    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "direccion");
    $element[5]->clear();

    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "telefono");
    $element[6]->clear();

    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "email");
    $element[7]->clear();
    $element[7]->sendKeys(array("xxxxxx"));

    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "website");
    $element[8]->clear();
    $element[8]->sendKeys(array("xxxxxx"));

    // Selecciono editar Animales.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");
    // Hago click.   
    $element[9]->click();
    sleep(1);

    $element[4] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    $element[4]->sendKeys(array("Adoptar"));

    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "direccion");
    $element[5]->sendKeys(array(" Calle 52"));

    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "telefono");
    $element[6]->sendKeys(array("555-5556"));

    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "email");
    $element[7]->clear();
    $element[7]->sendKeys(array("mail@gmail.com"));

    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "website");
    $element[8]->clear();
    $element[8]->sendKeys(array("www.anysite.com"));

    // Selecciono editar Animales.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");
    // Hago click.   
    $element[9]->click();
    sleep(1);

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>