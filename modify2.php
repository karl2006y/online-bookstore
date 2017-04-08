<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$oldpw = $_POST['oldpw'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$id=   $_SESSION['username'] ;
$sql_query ="SELECT * FROM user where email= '$id'";
$result =$db_link->query($sql_query);
$id2 = "email";
$passwd2 = "passwd";
		while ($row_result=$result->fetch()) {
			$id2 = $row_result['email'];
			$passwd2 = $row_result['passwd'];
		}
if($pw != null && $pw2 != null && $passwd2 == $oldpw && $pw == $pw2)
{
        //將帳號寫入session，方便驗證使用者身份
 $sql2 = "UPDATE `user` SET `passwd` = '$pw' WHERE `email` = '$id'";
        if($db_link->query($sql2))
        {
                echo '更新成功!';
      			echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
        }
        else
        {
                echo '更新失敗!';
			 	echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
        }
		

}
else
{
        echo '輸入資料錯誤!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
		
}
?>