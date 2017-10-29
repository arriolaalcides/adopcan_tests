<?php

class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    // default params
    public $parameters = array(
        'seleniumServerRequestsTimeout' => 10000,
        'timeout'                       => 10000,
    );
 
    // list of browsers with per-browser config
    public static $browsers = array(
        //array('browserName' => 'firefox'),
        array('browserName' => 'chrome', 'host'=>'localhost', 'port'=>4444),
        //array('browserName' => 'internet explorer')
    );
 
    protected function setUp()
    {
        $this->setBrowserUrl('http://www.adopcan.com/search');
    }
 
    function testTitle()
    {
        $this->url('http://www.adopcan.com/search');
        $this->assertEquals('Buscador - AdopCan', $this->title());        
    }
}
?>