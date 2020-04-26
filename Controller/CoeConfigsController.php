<?php 

class CoeConfigsController extends CoestationAppController {
  
  public $name = 'CoeConfigs';

  public $uses = array('Plugin', 'Coestation.CoeConfig');
  
  public $helpers = array('BcPage', 'BcHtml', 'BcTime', 'BcForm');
  
  public $components = ['BcAuth', 'Cookie', 'BcAuthConfigure'];
  
  //public $subMenuElements = array('');
  
  public function beforeFilter() {
    parent::beforeFilter();
    //$this->BcAuth->allow('');
    
    //$this->Security->unlockedActions = array('response');
  }
  
  public function admin_index() {
	  $this->pageTitle = 'Coestation設定';
		if(!$this->request->data) {
			$this->request->data['CoeConfig'] = $this->CoeConfig->findExpanded();
		} else {
			if($this->CoeConfig->saveKeyValue($this->request->data)){
				$this->setMessage('Coestation設定を保存しました。');
			}else{
				$this->setMessage('エラー', true);
			}
		}
	}
  
  
}
?>