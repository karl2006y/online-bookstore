<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$db_host = "localhost";
	$db_username = "root";
	$db_passwd = "";
	$db_name = "book";
	try{
		$db_link = new PDO("mysql:host={$db_host};dbname={$db_name};charset=utf8", $db_username ,$db_passwd);
	} catch (PDOException $e)	{
		print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
		die();
	}
?>
