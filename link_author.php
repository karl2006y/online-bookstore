<h3>1.請選擇要鍵結之書籍</h3> 
<form method="get" action="link2.php"> 
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT author.name AS '作者',book.name AS '書名',book.id AS '書ID'
FROM booklist RIGHT JOIN book 
ON booklist.book_id = book.id
LEFT JOIN author ON booklist.author_id = author.id";
$result =$db_link->query($sql_query);
echo "<select name='sel' size='6'>";
while ($row_result=$result->fetch()) {
	if ($row_result['作者']==null){
		echo "<option value='". $row_result['書ID']."'>".$row_result['書名']."</option>";

	}		
}
echo "</select><br> <hr>";
?>
<h3>2.請選擇要鍵結之作者</h3> 
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT author.id AS '作者ID',author.name AS '作者' FROM author";
$result =$db_link->query($sql_query);
echo "<select name='sel2' size='3'> ";
while ($row_result=$result->fetch()) {
		echo "<option value='" .$row_result['作者ID']. "'>".$row_result['作者']."</option>";

}
echo "</select>";
?>
<br />
<br />
<input type="submit" value="送出" />
</form>