<?php
class Requir{
	public function database(){
		include('db.php');
	}//end database ();
	public function bootreq(){
		include('bootstrap.php');
	}//end bootreq()
	public function jquery(){
		include('jquery.php');
	}
}//end class require()
$load = new Requir;
$load -> bootreq();
$load -> jquery();
$load -> database();
?>