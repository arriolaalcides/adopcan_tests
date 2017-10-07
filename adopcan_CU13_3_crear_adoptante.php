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
    $element[3] = $webdriver->findElementBy(LocatorStrategy::linkText, "Adoptantes");
    // Hago click.   
    $element[3]->click();
    sleep(1);

    // Selecciono crear Voluntarios.
    $element[4] = $webdriver->findElementBy(LocatorStrategy::linkText, "Agregar");
    // Hago click.   
    $element[4]->click();
    sleep(1);

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    // Hago click.   
    $element[5]->sendKeys(array("")); 
    sleep(1);

    // No lleno el campo 'Estado'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "apellido");
    // Hago click.   
    $element[6]->sendKeys(array(""));
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "direccion");
    // Hago click.    
    $element[7]->sendKeys(array("")); 
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "telefono");
    // Hago click.    
    $element[8]->sendKeys(array("")); 
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::name, "email");
    // Hago click.    
    $element[9]->sendKeys(array("xxxxxxxxx")); 
    sleep(1);

    //fotos
    $element[8] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");

    $element[8]->click();
    sleep(1);

    $element[5] = $webdriver->findElementBy(LocatorStrategy::name, "nombre");
    // Hago click.   
    $element[5]->sendKeys(array("Pedro")); 
    sleep(1);

    $element[8] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");

    $element[8]->click();
    sleep(1);

     // No lleno el campo 'Estado'.
    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "apellido");
    // Hago click.   
    $element[6]->sendKeys(array("Guerra"));
    sleep(1);

    //
    $element[7] = $webdriver->findElementBy(LocatorStrategy::name, "direccion");
    // Hago click.    
    $element[7]->sendKeys(array("Balcarce 123")); 
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[8] = $webdriver->findElementBy(LocatorStrategy::name, "telefono");
    // Hago click.    
    $element[8]->sendKeys(array("44567890")); 
    sleep(1);

    // No lleno el campo 'sexo'.
    $element[9] = $webdriver->findElementBy(LocatorStrategy::name, "email");
    // Hago click.
    $element[9]->clear();    
    $element[9]->sendKeys(array("pguerra@gmail.com")); 
    sleep(1);

    //fotos
    $element[8] = $webdriver->findElementBy(LocatorStrategy::className, "btn-primary");

    $element[8]->click();
    sleep(1);

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>