<?php
class account extends engine{
	function log($nick, $passwd)//Logowanie, sprawdzanie czy konto istnieje.
	{
			if($_POST){
			$zapytanie = mysqli_query($this->handle,"SELECT id FROM users WHERE Nick = '".mysqli_real_escape_string($this->handle,$nick)."' AND Password = '".mysqli_real_escape_string($this->handle,md5($passwd))."' LIMIT 1");
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
	}//end log()
	function relog()//wylogowywanie
	{
		unset($_SESSION['zalogowany']);
		unset($_SESSION['login']);
		header('location: ./index.php');
	}//End relog()

	function reg($nick,$passwd,$avatar)//Rejestracja
	{
		$true = 1;
		$nick = mysqli_real_escape_string($this->handle,$nick);
		//Nick valid
			if (strlen($nick) < 6)
			{
				echo "<b>Nick zbyt krótki(min 6)</b><br/>";
				$true=0;
			}
			elseif(strlen($nick) > 16)
			{
				echo "<b>Nick zbyt długi, max 16 znaków</b><br/>";
				$true = 0;
			}
		$passwd = mysqli_real_escape_string($this->handle,$passwd);
		//Pass Valid
			if (strlen($passwd) < 6)
			{
				echo "<b>Hasło zbyt krótkie(min 6)</b><br/>";
				$true=0;
			}
			elseif(strlen($passwd) > 16)
			{
				echo "<b>Hasło zbyt długie, max 16 znaków.<b><br/>";
				$true = 0;
			}
		if($true == 1){
			$passwd = md5($passwd);
		}
		$avatar = mysqli_real_escape_string($this->handle,$avatar);

		$isset = mysqli_query($this->handle,"SELECT * FROM `users`");
		if($true ==1){
			while($tmp = mysqli_fetch_array($isset)){
				if($tmp['Nick']==$nick){
					echo "<b>Konto już istnieje.</b><br/>";
					$true = 0;
				}
			}
		}

		if($true == 1){
			$query = mysqli_query($this->handle,"INSERT INTO `users`(`Nick`, `Password`, `Avatar`) VALUES ('$nick','$passwd','$avatar')");
		}
	}//end reg()
}//End class
$account = new account($loginBaza,$passBaza,$tableBaza,$ipBaza);
?>