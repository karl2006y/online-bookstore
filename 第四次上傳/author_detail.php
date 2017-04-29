
<table border="2" >
	<tr>
		<th>著作</th>
	</tr>
<?php
$getAuthorName = $_GET['detail'];
echo "<title >$getAuthorName 明細</title>";
echo "<h2>$getAuthorName</h2> <a href='link_author.php'>鍵結書籍</a>";
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$queryAuthorDetail ="SELECT author.name AS '作者',book.name AS '書名'
FROM booklist
RIGHT JOIN book  ON booklist.book_id = book.id
LEFT JOIN author ON booklist.author_id = author.id
WHERE author.name =  ?";
	try {
		$statementAuthorDetail = $db_link->prepare($queryAuthorDetail);
		$statementAuthorDetail->execute(array("$getAuthorName"));
			while ($rowResultAuthorDetail=$statementAuthorDetail->fetch()) {
				echo "<tr>";
				echo"<td>". $rowResultAuthorDetail['書名']."</td>";
				echo "</tr>";
}
	} catch (PDOException $e) {
			print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
			die();
	}
		?>
		
</table>