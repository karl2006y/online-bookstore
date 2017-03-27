<?php session_start(); ?>
<title>作者列表</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	


(1) 作者列表(author.php)，列出所有作者的著作數量，並提供細單(author_detail.php)。
<?php
  header("Content-Type:text/html; charset=utf-8");
//連接資料庫
require_once 'mysql_connect.php';


$sql = "SELECT author.id, author.name, COUNT(booklist.book_id) FROM author LEFT JOIN booklist ON author.id = booklist.author_id GROUP BY (author.id)";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($result);

echo "$row[1] ";
echo "$row[2] ";
?>