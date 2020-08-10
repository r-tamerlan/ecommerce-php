<?php

class Load {	

	public function view ($dosyaadi,$data=null,$data1=null,$data2=null,$data3=null,$data4=null,$sitePage=null) {
		include 'app/view/'.$dosyaadi.'.php';
		                 //admin/homepage
	}
	
	public function model ($way,$dosyaadi) {
		
		include 'app/models/' . $way . $dosyaadi. '.php';
		return new $dosyaadi();
	}
	
	public function form ($dosyaadi) {
		
		include 'libs/'.$dosyaadi.'.php';
		return new $dosyaadi();
	}

}
?>