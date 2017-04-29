<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
	$dbHost = "localhost";
	$dbUsername = "root";
	$dbPasswd = "";
	$dbName = "book";
	try{
		$db_link = new PDO("mysql:host={$dbHost};dbname={$dbName};charset=utf8", $dbUsername ,$dbPasswd);
	} catch (PDOException $e)	{
		print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
		die();
	}
?>
