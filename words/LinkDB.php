<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./main.css">
<?php 
$servername = 'localhost';
$username = 'root';
$passwd = 'root';
$dbname = 'mydb';
$link = mysql_connect($servername,$username,$passwd);
if (!$link) { 
die("<p class='warning'>出错啦!</p>"); 
} if (!mysql_select_db($dbname,$link)) { 
die("<p class='warning'>出错啦2!</p>"); 
} 
?>