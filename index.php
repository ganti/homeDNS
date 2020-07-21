<?php  
 

$ip = trim(file_get_contents("ip.txt"));
Header("Location: http://".$ip);  


exit(); 