<?php session_start(); ?>
<title>主目錄</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<?php
//此判斷為判定觀看此頁有沒有權限
if($_SESSION['username'] != NULL)
{
		echo '<a href="logout.php">登出</a>  <br><br>';	
        echo ' <a href="author.php">作者列表</a>  &nbsp;&nbsp; ';
        echo '<a href="modify.php">更改密碼</a>  &nbsp;&nbsp;  ';
		echo '<a href="no_author.php">無作者之書籍</a>  &nbsp;&nbsp;  ';
		echo '<a href="new_author.php">作著發表</a>  &nbsp;&nbsp;  ';
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>