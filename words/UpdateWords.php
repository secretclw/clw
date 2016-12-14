<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="./main.css" />
<?php
include ('./LinkDB.php');
$id = addslashes($_GET['id']);
$result = mysql_query("SELECT * FROM words WHERE id = $id",$link); 
$row = mysql_fetch_row($result);
?>
<form class="form" method="post" action="./Update.php?id=<?=$id?>">
	<input class="input-tit" type="text" name="title2" value="<?=$row[1]?>" />
	<textarea name="txt2"><?=$row[2]?></textarea>
	<input class="input-btn" type="submit" value="提交" />
</form>