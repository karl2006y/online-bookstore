<?php session_start(); ?>
<title>登入中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$postId = $_POST['id'];
	$postPw = $_POST['pw'];
	header("content-type: text/html; charset=utf-8");
	include 'connectmysql.php';
	//$sql_query ="SELECT * FROM user where email= '$id'";
	try {
		$queryUser = "SELECT * "
			. "FROM `user` "
			. "WHERE `email` = ?";
		$statementUser = $db_link->prepare($queryUser);
		$statementUser->execute(array("$postId"));
		$resultUser = $statementUser->fetch();
	} catch (PDOException $e) {
		print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
		die();
	}

	if($postId != false & $postPw != false& $postId==$resultUser['email']  & $postPw == $resultUser['passwd'] ) {

		$_SESSION['username'] = $postId;
		echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
		
	} else {
		echo '登入失敗!';
    	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}
	


?>