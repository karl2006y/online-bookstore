<?php session_start(); ?>
<title>登入中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php

//連接資料庫
require_once 'mysql_connect.php';
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user where email= '$id'";
$result = mysqli_query($con,$sql);
$row = @mysqli_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[1] == $id && $row[2] == $pw)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['username'] = $id;
        echo '登入成功!';
		mysqli_close($con);
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}
?>