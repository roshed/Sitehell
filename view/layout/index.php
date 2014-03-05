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
// Top strony który ma wczytać
include($first.'/'.$second.'/'.$top);
//co ma wczytac
include($first."/".$three.'/'.$view.'.php');
//bot strony który ma wczytać
include($first.'/'.$second.'/'.$bot);
?>