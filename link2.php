<?php
include 'connectmysql.php';
	header("content-type: text/html; charset=utf-8");
	$book=$_GET["sel"];
	$author=$_GET["sel2"];
	 $sql = "insert into booklist  (author_id, book_id) values ('$author', '$book')";
        if($db_link->query($sql))
        {
                echo '新增成功!';

                echo '<meta http-equiv=REFRESH CONTENT=2;url=no_author.php>';
       }
       else
        {
               echo '新增失敗!';
               echo '<meta http-equiv=REFRESH CONTENT=2;url=link_author.php>';
       }
?>