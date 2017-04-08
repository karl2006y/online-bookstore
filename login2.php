<?php session_start(); ?>
<title>登入中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	header("content-type: text/html; charset=utf-8");
	include 'connectmysql.php';
	$sql_query ="SELECT * FROM user where email= '$id'";
	$result =$db_link->query($sql_query);
	$id2 = "email";
	$pw2 = "passwd";
		while ($row_result=$result->fetch()) {
			$id2 = $row_result['email'];
			$pw2 = $row_result['passwd'];
		}
if($id != null && $pw != null && $id2 == $id && $pw2 == $pw)
{
	$_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
}	
else {
        echo '登入失敗!';
    	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
}



?>