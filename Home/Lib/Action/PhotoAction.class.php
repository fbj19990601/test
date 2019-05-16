<?php
class PhotoAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'Photo');
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'Photo');
	}
	
	public function tags(){
		$this->doTags('Photo');
	}
		

}
?>