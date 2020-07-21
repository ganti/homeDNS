<?php  
$fp = fopen("ip.txt","w+");  
fwrite($fp,$_SERVER['REMOTE_ADDR']);  
fclose($fp);  