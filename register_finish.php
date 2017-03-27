<?php session_start(); ?>
<title>註冊中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        //新增資料進資料庫語法
        $sql = "insert into user (email, passwd) values ('$id', '$pw')";
        if(mysqli_query($con,$sql))
        {
                echo '新增成功!';
				mysqli_close($con);
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
        }
        else
        {
                echo '新增失敗!';
				mysqli_close($con);
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
        }
}
else
{
        echo '請正確輸入帳號密碼';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>