<?php
class DownloadAction extends CommonAction{
	public function index(){
		$id=(int)I('get.id');
		$this->getarticle($id,"id =%d",$this->lang,'Download');	
	}

	public function html(){
		$url=I('get.url');
		$this->getarticle($url,"url ='%s'",$this->lang,'Download');
	}

	public function tags(){
		$this->doTags('Download');
	}


}
?>