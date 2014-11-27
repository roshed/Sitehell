<?php
include('config.php');
if($bootstrap==True){
class Bootstrap{
	public function style()
	{
	print'<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
';
	}//end Header()
	public function script($scriptbootstrap)
	{
		if($scriptbootstrap==True){
		print '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
';		}//end if
	}//end script()
}//end class Bootstrap
}//end if $bootstrap==true

?>