<?php	
//Project by
/*
######                              ######  
#     #  ####   ####  #    # ###### #     # 
#     # #    # #      #    # #      #     # 
######  #    #  ####  ###### #####  #     # 
#   #   #    #      # #    # #      #     # 
#     #  ####   ####  #    # ###### ######  
*/

	if(!mysql_connect($dbip,$dbuser,$dbpass)){
		die('Błąd połączenia z bazą danych!');
	}
	// W index.php ustaw controller jako wybrana baza danych
	if(!mysql_select_db($dbselect)){ 
		die('Błąd wybrania bazy danych!');
	}
	
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET collation_connection = utf8_polish_ci");

//Do edytowania w index
	$query_user = mysql_query("SELECT * FROM ".$firstTable." LIMIT 0, 30");
	$user = mysql_fetch_array($query_user);

	
?>