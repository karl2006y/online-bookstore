<?php session_start(); ?>
<title>登入中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	header("content-type: text/html; charset=utf-8");
	include 'connectmysql.php';
	//$sql_query ="SELECT * FROM user where email= '$id'";
	try {
		$sql_query = "SELECT * "
			. "FROM `user` "
			. "WHERE `email` =  ? "
			. "WHERE `passwd` = ? ;";
		$statement = $db_link->prepare($sql_query);
		$statement->excute(array($id, $pw));

		$result = $statement->fetch();
	} catch (PDOException $e) {
		dump($e);
	}

	if($row_result != false) {

		$_SESSION['username'] = $id2;

		echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
	} else {
		echo '登入失敗!';
    	echo '<meta http-equiv=REFRESH CONTENT=1;url=login.php>';
	}
	


?>