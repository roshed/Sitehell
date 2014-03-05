Sitehell
========
Witam bardzo serdecznie.
Mam przyjemność przedstawienia wam mojego autorskiego kontrolera php którego nazwałem "Sitehell".
 
Owy kontroler jest stworzony dla osób które potrzebują takiego cudeńka jednak nie potrafią stworzyć go samemu lub bo prostu tworzą coś na szybko i nie mają czasu na stworzenie go samemu.
 
Sitehell pomaga w edytowania strony po przez edytowania jednego pliku zamiast edytowania każdej podstrony dzięki czemu zyskujemy na prawdę sporo czasu.
 
Aby poprawnie skonfigurować Sitehell'a wystarczy otworzyć plik index.php znajdujący się w głównym folderze,
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

$controller = 'index'; //nazwaprojektu, co ma wczytywać. BEZ .PHP

$top = 'header.php'; // Góra strony, nazwa pliku

$bot = 'footer.php'; // Dół strony, nazwa pliku

Całą resztę strony jak już będzie ułożona zależy do was jednak załączyłem do środka przykład html'owy jak to powinno wyglądać.


Aktualna wersja 0.01 i wciąż nad nią pracuję.
 
Mam nadzieję że Sitehell skróci wam czas pracy do minimum.
 
Jedyne czego wymagam od was to gdzieś w kodzie strony dodać że wasza strona używa Sitehell'a by RosheD...
