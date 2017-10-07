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

    $element[4] = $webdriver->findElementBy(LocatorStrategy::xpath, "//*[@id='app']/article/section/div/div/div/div/section/div/table/tbody/tr[2]/td[4]/a[1]");
    // Hago click.   
    $element[4]->click();
    sleep(1);

    // No lleno el campo 'nombre'.
    $element[5] = $webdriver->findElementBy(LocatorStrategy::linkText, "Adoptar");
    // Hago click.   
    $element[5]->click(); 
    sleep(1);

     $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "miembro");
    // Hago click.   
    //$element[6]->sendKeys(array("diego amarilla") );
     $element[6]->click(); 
    sleep(1);

    
    $element[7] = $webdriver->findElementBy(LocatorStrategy::xpath, "//*[@id='app']/article/section/div/div/div/form/div[3]/button");
    // Hago click.   
    $element[7]->click();

    sleep(1);

    $element[6] = $webdriver->findElementBy(LocatorStrategy::name, "miembro");
    // Hago click.
    $element[6]->click(); 
    $element[6]->sendKeys(array("diego amarilla") );
    sleep(1);

    
    $element[7] = $webdriver->findElementBy(LocatorStrategy::xpath, "//*[@id='app']/article/section/div/div/div/form/div[3]/button");
    // Hago click.   
    $element[7]->click();

}
else{
	echo "<b>Error de navegaci&oacute;n.</b><br/>";
}
die;
$webdriver->close();

?>