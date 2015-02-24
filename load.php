<?php
 $katalog='engine';
 
 foreach(scandir($katalog) as $file)
  if($file != '.' && $file != '..')
    require_once($katalog.'/'.$file);
?>
