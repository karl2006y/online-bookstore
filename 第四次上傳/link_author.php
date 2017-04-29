<h2>1.請選擇要鍵結之書籍</h2> 
<form method="get" action="link2.php"> 
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$queryBookLink ="SELECT author.name AS '作者',book.name AS '書名',book.id AS '書ID'
FROM booklist RIGHT JOIN book 
ON booklist.book_id = book.id
LEFT JOIN author ON booklist.author_id = author.id";
$statementBookLink = $db_link->prepare($queryBookLink);
$statementBookLink->execute();
echo "<select name='book' size='1'>";
while ($rowResultBookLink=$statementBookLink->fetch()) {
	if ($rowResultBookLink['作者']==null){
		echo "<option value='". $rowResultBookLink['書ID']."'>".$rowResultBookLink['書名']."</option>";
	}		
}
echo "</select><br> <hr>";
?>
<h2>2.請選擇要鍵結之作者</h2> 
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$queryAuthorLink ="SELECT author.id AS '作者ID',author.name AS '作者' FROM author";
$statementAuthorLink = $db_link->prepare($queryAuthorLink);
$statementAuthorLink->execute();
echo "<select name='author' size='1'> ";
while ($rowResultAuthorLink=$statementAuthorLink->fetch()) {
		echo "<option value='" .$rowResultAuthorLink['作者ID']. "'>".$rowResultAuthorLink['作者']."</option>";
}
echo "</select>";
?>
<br />
<br />
<input type="submit" value="送出" />
</form>