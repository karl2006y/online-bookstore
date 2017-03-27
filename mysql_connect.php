<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//資料庫設定
//資料庫位置
$db_server = "localhost";
//資料庫名稱
$db_name = "book";
//資料庫管理者帳號
$db_user = "root";
//資料庫管理者密碼
$db_passwd = "";

//對資料庫連線
$con=mysqli_connect($db_server,$db_user ,$db_passwd,$db_name); 
if (!$con) 
{ 
    die("資料庫連線錯誤！<br> " ); 
	mysqli_close($con);
} 
else {
	echo "資料庫成功連線！<br>";
}

?> 