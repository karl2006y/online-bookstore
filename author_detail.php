<?php
$detail = $_POST['detail'];
echo "<title >$detail 明細</title>";
echo "<h2>$detail</h2>";
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT author.name AS '作者',book.name AS '書名'
FROM booklist RIGHT JOIN book 
ON booklist.book_id = book.id
LEFT JOIN author ON booklist.author_id = author.id";
$result =$db_link->query($sql_query);

while ($row_result=$result->fetch()) {
	if ($row_result['作者']==$detail)
	{echo $row_result['書名']."<br>";
			echo "<hr>";}		
}
	?>