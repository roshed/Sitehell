<?php
class account extends engine{
	function log($nick, $passwd)//Logowanie, sprawdzanie czy konto istnieje.
	{
			if($_POST){
			$zapytanie = mysqli_query($this->handle,"SELECT id FROM users WHERE Nick = '".mysql_real_escape_string($nick)."' AND Password = '".mysql_real_escape_string(md5($passwd))."' LIMIT 1");
			if(mysqli_num_rows($zapytanie) == 0)
			{
				echo'Podano nieprawidłowe dane!';
			}
			else
			{
				$zapytanie_array = mysqli_fetch_array($zapytanie);
				$_SESSION['login'] = $zapytanie_array['id'];
				$_SESSION['zalogowany'] = 1;
				header('location: index.php');
			}
		}
	}
	function relog()//wylogowywanie
	{
		unset($_SESSION['zalogowany']);
		unset($_SESSION['login']);
		header('location: ./index.php');
	}
	function register($nick,$passwd,$avatar){
		$true = 1;
		$nick = mysqli_real_escape_string($nick);
		//Nick valid
			if (strlen($passwd) < 6)
			{
				echo "Nick zbyt krótki, spróbuj ponownie. (min 6)";
				$true=0;
			}
			elseif(strlen($input) > 16)
			{
				echo "Nick zbyt długi, max 16 znaków.";
				$true = 0;
			}
		$passwd = mysqli_real_escape_string($passwd);
		//Pass Valid
			if (strlen($passwd) < 6)
			{
				echo "Hasło zbyt krótkie, spróbuj ponownie.(min 6)";
				$true=0;
			}
			elseif(strlen($input) > 16)
			{
				echo "Hasło zbyt długie, max 16 znaków.";
				$true = 0;
			}
		if($true == 1){
			$passwd = md5($passwd);
		}
		$avatar = mysqli_real_escape_string($avatar);
		if($true == 1){
			$query = mysqli_query($this->handle,"INSERT INTO `users`(`Nick`, `Password`, `Avatar`) VALUES ('$nick','$passwd','$avatar')");
		}
	}
}
$account = new account($loginBaza,$passBaza,$tableBaza,$ipBaza);
?>