<?php	
//Project by https://github.com/roshed
include('config.php');

class Database{
	//Connect to the database
	public function Connect($dbip, $dbselect, $dbuser, $dbpass){
		try{
			$pdo = new PDO('mysql:host='.$dbip.';dbname='.$dbselect.'', $dbuser, $dbpass);
		}//end try
		catch (PDOException $e) {
			print "Not configured database in config.php "."<br/>";
	    	print "Error!: " . $e->getMessage() . "<br/>";
	    die();
		}//end catch
	}//end function Connect
}

?>