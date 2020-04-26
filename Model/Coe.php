<?php
App::import('Model', 'AppModel');

class Coe extends AppModel {
	
	public $useTable = false;
	
	public $name = 'Coe';
	
	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		$this->CoeConfig = ClassRegistry::init('Coestation.CoeConfig');
	}
    
    
    // テキスト整形、テキストを配列に分割して返す
    public function textExplode($text){
	    $texts = [];
	    $text = str_replace("、、", ",", $text);
		$text = str_replace("、", ",", $text);
		$text = str_replace("。。", ",", $text);
		$text = str_replace("。", ",", $text);
		$text = str_replace("？？", "?,", $text);
		$text = str_replace("？", "?,", $text);
		$text = str_replace("！！", "!,", $text);
		$text = str_replace("！", "!,", $text);
		$texts = explode(',', $text);
		return $texts;
    }
    
    // キャッシュがあるか確認し、あればファイル名、なければfalse
    public function fileExist($tex, $ext = 'mp3'){
		$enc_tex =  $this->texEncode($tex);
		if(file_exists(APP.'Plugin/Twilio/webroot/files/'.$ext.'/'.$enc_tex.'.'.$ext)){
			return $enc_tex.'.'.$ext;
		}else{
			return false;
		}
    }
    
    // urlで使える仕様のbase64_encode
    public function texEncode($tex){
	    return rtrim(strtr(base64_encode($tex), '+/', '-_'), '=');
    }
    
    // 整形&音声に変換しても、あきらかに意味ないようなものは変換しない。
    public function isTrueTex($tex){
	    $tex = str_replace("　", " ", $tex);
		$tex = trim($tex);
	    $judg = true; 
		if(mb_strlen($tex) == 1){
			if($tex == ',') $judg = false;
			if($tex == '?') $judg = false;
			if($tex == '!') $judg = false;
			if($tex == ' ') $judg = false;
		}
		if(empty($tex)) $judg = false;
		if($judg){
			return $tex;
		}else{
			return false;
		}
    }
    
    
	
	
}
