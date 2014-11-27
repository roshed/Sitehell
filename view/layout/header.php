<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
  <title><?php echo $title; ?></title>
<meta name="description" content="Free Web Sitehell">
<meta name="keywords" content="HTML,CSS,XML,JavaScript">
<meta name="author" content="Hege Refsnes">

<link rel="icon" type="image/x-icon" href="<?php echo $layout; ?>img/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo $layout; ?>css/style.css" media="screen">
<?php
$header = new Bootstrap;
$header -> style();
$jQuery = new JQuery;
$jQuery -> version($jQueryVer);
?>

<!--[if lt IE 9]>
<script src="<?php echo $layout; ?>js/html5shiv.js"></script>
<![endif]-->
</head>