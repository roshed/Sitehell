<?php
class mysql extends engine{
	function add(){

	}
	function select($what,$what2){
		$query = mysqli_query($this->handle,"SELECT * FROM $what") or die(mysqli_error($this->handle));

		$tkn = mysqli_fetch_array($query);
		return $tkn[$what2];
	}
	function delete(){

	}
	function insertInto(){

	}
}
$mysql = new mysql($loginBaza,$passBaza,$tableBaza,$ipBaza);
?>