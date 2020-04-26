<?php
App::uses('Coe', 'Coestation.Model');

class CoeTest extends BaserTestCase {
	
    public $fixtures;
    
    public function __construct(){
	    $fixtures = array(
	        'plugin.coestation.Default/CoeConfig',
	        //'plugin.payjp.Default/Mypage'
	    );
	    $this->fixtures = $fixtures;
    }
    

    public function setUp() {
	    Configure::write('MccPlugin.TEST_MODE', true);
        $this->Coe = ClassRegistry::init('Coestation.Coe');
        parent::setUp();
    }
    
    public function tearDown(){
	    unset($this->Coe);
	    parent::tearDown();
    }
    
    
    
    

}