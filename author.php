<?php session_start(); ?>
<title>作者列表</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	


(1) 作者列表(author.php)，列出所有作者的著作數量，並提供細單(author_detail.php)。<br /><hr />
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT  author.name, COUNT(booklist.book_id) as num FROM author LEFT JOIN booklist ON author.id = booklist.author_id GROUP BY (author.id)";
$result =$db_link->query($sql_query);

while ($row_result=$result->fetch()) {
			echo "<form name='form' method='post' action='author_detail.php'>";
			echo "<input type='text' name='detail' style='font-size:18px;border-style:none;'  value ='".$row_result['name']."'readonly/>";
			echo "	共有".$row_result['num']."本書";
			echo "	<input type='submit'' name='button'value='明細'/>"."<br>";
			echo "</form>";
echo "<hr>";
}

?>