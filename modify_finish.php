<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

//連接資料庫
require_once 'mysql_connect.php';
$oldpw = $_POST['oldpw'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$id=   $_SESSION['username'] ;
$sql = "SELECT * FROM user WHERE email = '$id'";
$result = mysqli_query($con,$sql);
$row = @mysqli_fetch_row($result);
//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($pw != null && $pw2 != null && $row[2] == $oldpw)
{
        //將帳號寫入session，方便驗證使用者身份
 $sql2 = "UPDATE `user` SET `passwd` = '$pw' WHERE `email` = '$id'";
        if(mysqli_query($con,$sql2))
        {
                echo '更新成功!';
				mysqli_close($con);
      			echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
        }
        else
        {
                echo '更新失敗!';
				mysqli_close($con);
			 	echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
        }
		

}
else
{
        echo '輸入資料錯誤!';
		mysqli_close($con);
		echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
		
}
?>