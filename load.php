<?php
 $katalog='backend';

 foreach(scandir($katalog) as $file)
  if($file != '.' && $file != '..')
    require_once('backend/'.$file);
?>