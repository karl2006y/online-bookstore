<?php
include 'connectmysql.php';
	header("content-type: text/html; charset=utf-8");
	$getBook=$_GET["book"];
	$getAuthor=$_GET["author"];
	try {
		$insertAuthorBook= "insert into booklist  (author_id, book_id) values (?, ?)";
		$statementInsertAuthorBook = $db_link->prepare($insertAuthorBook);
	
  if(	$statementInsertAuthorBook->execute(array($getAuthor, $getBook)))
        {
                echo '新增成功!';

                echo '<meta http-equiv=REFRESH CONTENT=2;url=no_author.php>';
       }
       else
        {
               echo '新增失敗!';
               echo '<meta http-equiv=REFRESH CONTENT=2;url=link_author.php>';
       }
}
 	catch (PDOException $e) {
			print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
			die();
	}     
?>