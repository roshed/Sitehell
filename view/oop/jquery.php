<?php
include('config.php');
class JQuery{
	public function version($jquery){
		if($jquery==1){
			print'<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>';
		} else{
			print'<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>';
		}//end else
	}//end function version()
}//end JQuery
?>