<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
	<title>留言板</title>
	<link rel="stylesheet" type="text/css" href="./main.css" />
</head>
<body>
    <div id="header">
        <p>我的心情墙</p>
    </div>
    <div id="content">
        <div class="warp-form">
            <form class="form" method="post" action="InsertWords.php">
                <input class="input-tit" type="text" name="title" placeholder="写下你的心情摘要：" />
                <textarea name="text" placeholder="写下你此时此刻的感受："></textarea><br/> 
                <input class="input-btn" type="submit" value="提交" />
            </form>
        </div>
        <div class="warp-words">
            <?php 
            include ("./LinkDB.php"); 
            $result = mysql_query("SELECT * FROM words",$link); 
            $row = mysql_fetch_row($result); 
            while ($row) { 
                echo "<div class='words-con'>";
                echo "<p class='words-tit'>".$row[1]."</p><p class='words-time'>".$row[3]."</p><br/><br>"; 
                echo "<p class='words-txt'>".$row[2]."</p>"; 
                echo "<br/><hr/><a class='btn-del' href='./DeleteWords.php?id=$row[0]'>删除</a>";
                echo "<a class='btn-upd' href='./UpdateWords.php?id=$row[0]'>修改</a><br/>";
                echo "</div>"; 
                $row = mysql_fetch_row($result); 
            } 
            mysql_close($link); 
            ?>         
        </div>    
    </div>
</body>
</html>