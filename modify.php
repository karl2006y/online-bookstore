<?php session_start(); ?>
<title>更改密碼</title>	
<?php
if($_SESSION['username'] != null){
		$id=$_SESSION['username'];
		echo '<a href="home.php">主目錄</a>&nbsp;&nbsp;';	
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email："."$id";
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /"';
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		echo '<form name="form" method="post" action="modify_finish.php">';
		echo '&nbsp;&nbsp;舊&nbsp;密&nbsp;碼	：<input type="text" name="oldpw" /> <br>';
		echo '輸入密碼	：<input type="password" name="pw" /> <br>';
		echo '確認密碼 ：<input type="password" name="pw2" /> <br>';
		echo '<input type="submit" name="button" value="確定" />';
		echo '</form>';
} else {
	echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>
