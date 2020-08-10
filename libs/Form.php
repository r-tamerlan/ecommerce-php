<?php


class Form extends Bilgi {	

	public $deger,$veri;
	public $error=array();
	                  //basliq
	public function get ($key) {
		$this->deger=$key;
		$this->veri=htmlspecialchars(strip_tags($_POST[$key]));
		return $this;
	}

	public function bosmu() {

	if (empty($this->veri)) :
	$this->error[]=$this->deger . " boş olamaz";
	parent::hata(false,"users");	 // burası farklı olabilir
	return $this;
	else:
	return $this->veri;
	endif;

	}
}
?>