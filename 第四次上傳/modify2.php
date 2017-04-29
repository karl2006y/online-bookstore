<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$postOldPw = $_POST['oldpw'];
$postPw = $_POST['pw'];
$postPw2 = $_POST['pw2'];
$sessionUsername=   $_SESSION['username'] ;
$queryDbUsername = "email";
$queryDbPasswd= "passwd";

$querySqlUser ="SELECT * FROM user where email= ?";
$statementUser= $db_link->prepare($querySqlUser);
$statementUser->execute(array("$sessionUsername"));
			while ($rowResultUser=$statementUser->fetch()) {
			$queryDbUsername = $rowResultUser['email'];
			$queryDbPasswd = $rowResultUser['passwd'];
		}
			
if($postPw != null && $postPw2 != null && $queryDbPasswd == $postOldPw && $postPw == $postPw2){
		$updateSqlPasswd = "UPDATE `user` SET `passwd` = ? WHERE `email` = ?";
		$statementUpdatePasswd= $db_link->prepare($updateSqlPasswd);
       			 if($statementUpdatePasswd->execute(array($postPw,$sessionUsername))){
                		echo '更新成功!';
      					echo '<meta http-equiv=REFRESH CONTENT=1;url=home.php>';
      		  }
      		  else{
              		 echo '更新失敗!';
			 		 echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
    		  }
		
}
else{
        echo '輸入資料錯誤!';
		echo '<meta http-equiv=REFRESH CONTENT=2;url=modify.php>';
		
}
?>