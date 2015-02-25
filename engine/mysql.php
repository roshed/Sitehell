<?php
class mysql extends engine{
	function update($what,$set,$where){
		$what = mysqli_query($this->handle,"UPDATE `$what` SET $set WHERE $where") or die(mysqli_error($this->handle));
		echo 'Done';
	}
	function select($what,$what2){
		$what = mysqli_real_escape_string($this->handle,$what);
		$query = mysqli_query($this->handle,"SELECT * FROM $what") or die(mysqli_error($this->handle));

		$tkn = mysqli_fetch_array($query);
		return $tkn[$what2];
	}
	function delete($what,$where){
		$what = mysqli_query($this->handle,"DELETE FROM `$what` WHERE $where");
	}
	function insertInto($where,$name,$values){
		$what = mysqli_query($this->handle,"INSERT INTO `$where`($name) VALUES ($values)") or die(mysqli_error($this->handle));
		echo 'Done';
	}
}
$mysql = new mysql($loginBaza,$passBaza,$tableBaza,$ipBaza);
?>