<?php session_start(); ?>
<title>註冊中...</title>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include 'connectmysql.php';
	header("content-type: text/html; charset=utf-8");
$postId = $_POST['id'];
$postPw = $_POST['pw'];
$postPw2 = $_POST['pw2'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($postId != null && $postPw != null && $postPw != null && $postPw == $postPw)
{
	try {
		$insertSqlUser = "insert into user (email, passwd) values (? ,?)";
		$statementSqlUser = $db_link->prepare($insertSqlUser);
	
 		if(	$statementSqlUser->execute(array($postId, $postPw)))
      	  {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
      	  }else
	       	{
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
			}
 	}catch (PDOException $e) {
			print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
			die();
	}    	
}
	else{
        echo '請正確輸入帳號密碼';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.php>';
}
?>