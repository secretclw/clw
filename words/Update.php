<meta charset="utf-8" />
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./main.css" />
<?php
include ('./LinkDB.php');
$id = $_GET['id'];
$title2 = $_POST['title2'];
$txt2 = $_POST['txt2'];
echo $id,$title2,$txt2;
$sql = "UPDATE `words` SET `id`=$id,`title`=$title2,`text`=$txt2`,datetime`=now() WHERE `id`=$id";
    if (mysql_query($sql,$link)) { 
        echo "<p class='transit'>修改成功！<p>"; 
        echo "<meta http-equiv='refresh' content='1;URL=./words.php'>"; 
    } else {
        echo "<p class='warning'>修改失败！</p>"; 
        //echo "<meta http-equiv='refresh' content='1;URL=./words.php'>";
        echo mysql_query($sql);
    } 
mysql_close($link);
?>