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
    $element[3] = $webdriver->findElementBy(LocatorStrategy::linkText, "juan");
    // Hago click.   
    $element[3]->click();
    sleep(1);

    // Selecciono editar el perfil.
    $element[4] = $webdriver->findElementBy(LocatorStrategy::linkText, "Perfil");
    // Hago click.   
    $element[4]->click();
    sleep(1);

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    // Hago click.   
    $element[5]->clear();
    sleep(1);

    // No lleno el campo 'apellido'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "apellido");
    // Hago click.   
    $element[6]->clear();
    sleep(1);

    $element[7] = $webdriver->findElementBy(LocatorStrategy::className, "btn");

    $element[7]->click();

    $element[5]->sendKeys(array("juan"));
    sleep(1);
    $element[6]->sendKeys(array("perez"));
    sleep(1);
    $element[7]->click();

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>