<?php
class engine {
	var $handle;

	function __construct($dbuser,$dbpass,$dbname,$dbhost)
	{
		$this->handle = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)
		or die ("Połączenie z bazą danych nie udane.");
		$this->handle->set_charset("utf8");
		$q = mysqli_select_db($this->handle,$dbname)
		or die("Błąd wybierania bazy danych ".$dbname);
	}

	function __destruct(){
		mysqli_close($this->handle);
	}
}
?>