<?php 
//Project by https://github.com/roshed
session_start();

//documents folder
$first = 'view'; // First folder in sitehell libelary.
$second = 'layout'; // Second folder in sitehell libelary.
$three = 'index'; // Third folder in sitehell libelary.

//end navigation
//Start controller
$controller = 'index'; //Name project in $three folder, default is "index".
$top = 'header.php'; // Header file start in doctype, end </head>.
$bot = 'footer.php'; //Bottom doctype, start <footer> end </html>.

/*
Core Sitehell
*/
$layout = ($first.'/'.$second.'/');

//if get=view is empty, load index.php
$view = empty($_GET['view']) ? 'index' : $_GET['view']; 

//view to the get
//example is address.com/view=library
switch($view) {
	case 'index' :

	break;

	case 'library' :

	break;

	default: //if get not in switch
		$view='index';
	break;
}
//And you must add file.php to $first/$three
//Difoult 

//Load main controller.
require($first.'/'.$second.'/'.$controller.'.php');

/*
End-Core Sitehell
*/
?>