<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./main.css" />
<?php 
include ("./LinkDB.php"); 
$title = addslashes($_POST['title']); 
$text = addslashes($_POST['text']); 
$sql = "INSERT INTO `words` (`id`, `title`, `text`, `datetime`) VALUES (NULL, '$title', '$text', now());"; 
if (mysql_query($sql,$link)) { 
echo "<p class='transit'>提交成功！</p>"; 
echo "<meta http-equiv='refresh' content='1;URL=words.php'>"; 
} else {
echo "<p class='warning'>提交失败</p>"; 
echo "<meta http-equiv='refresh' content='1;URL=words.php'>";
} 
mysql_close($link); 
?> 