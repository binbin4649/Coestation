<?php
App::uses('CoeConfig', 'Coestation.Model');

class CoeConfigTest extends BaserTestCase {
	
    public $fixtures;
    
    public function __construct(){
	    $fixtures = array(
	        'plugin.coestation.Default/CoeConfig',
	    );
	    $this->fixtures = $fixtures;
    }
    

    public function setUp() {
        $this->CoeConfig = ClassRegistry::init('Coestation.CoeConfig');
        parent::setUp();
    }
    
    public function tearDown(){
	    unset($this->CoeConfig);
	    parent::tearDown();
    }

    
    
/*
    public function testFalsePointAdd(){
	    // mypage_idが無い
	    $data = ['mypage_id'=>'', 'point'=>'100', 'reason'=>'test'];
	    $this->assertFalse($this->PointUser->pointAdd($data));
	    
	    // pointが無い
	    $data = ['mypage_id'=>1, 'point'=>'', 'reason'=>'test'];
	    $this->assertFalse($this->PointUser->pointAdd($data));
	    
	    // reasonが無い
	    $data = ['mypage_id'=>1, 'point'=>'100', 'reason'=>''];
	    $this->assertFalse($this->PointUser->pointAdd($data));
    }
    
    public function testTruePointAdd(){
	    $data = ['mypage_id'=>1, 'point'=>'100', 'reason'=>'test'];
	    $r = $this->PointUser->pointAdd($data);
	    $this->assertEquals(200, $r['PointBook']['point_balance']);
	    $this->assertEquals('test', $r['PointBook']['reason']);
    }
*/
    
    

}