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
session_start();
$dbip = '#'; // ip bazy danych
$dbuser = '#'; // Użytkownik bazy danych
$dbpass = '#'; // Hasło bazy danych
$dbselect = '#'; //Wybranie bazy danych

$firstTable = 'index'; // Pierwsza tabela w mysql Używać za pomocą $user[''];
$secondTable = ''; // Pierwsza tabela w mysql Używać za pomocą $user[''];

$first = 'view'; // Pierwszy folder
$second = 'layout'; // Drugi folder
$three = 'index'; // Trzeci folder
//etcetra etcetra
$controller = 'index'; //nazwa projektu, co ma wczytywać. BEZ .PHP
$top = 'header.php'; // Góra strony, nazwa pliku
$bot = 'footer.php'; // Dół strony, nazwa pliku

$layout = ($first.'/'.$second.'/');

@include ('config.php'); //Wczytanie ustawień
@include ('db.php'); // Wczytanie bazy danych
// Jeśli index jest pusty to wczytaj index.php
$view = empty($_GET['view']) ? 'index' : $_GET['view']; 

switch($view) {
	case 'index' :

	break;

	case 'test' :

	break;
}
//Wczytanie kontrolera głównego
include ($first.'/'.$second.'/'.$controller.'.php');
?>