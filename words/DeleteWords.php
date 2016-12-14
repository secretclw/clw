<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./main.css" />
<?php
include ('./LinkDB.php');
$id = $_GET['id'];
$sql = "DELETE FROM `words` WHERE `id` = ".$id;
	if (mysql_query($sql,$link)) { 
        echo "<p class='transit'>删除成功！</p>"; 
        echo "<meta http-equiv='refresh' content='1;URL=words.php'>"; 
    } else {
        echo "<p class='warning'>删除失败</p>"; 
        echo "<meta http-equiv='refresh' content='1;URL=words.php'>";
    } 
mysql_close($link);
?>