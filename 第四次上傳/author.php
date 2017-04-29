<?php session_start(); ?>
<title>作者列表</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	


(1) 作者列表(author.php)，列出所有作者的著作數量，並提供細單(author_detail.php)。<br /><hr />
<table border="2" >
	<tr>
		<th>作者</th>
		<th>著作數量</th>
		<th>功能</th>
	</tr>
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
	try {
		$queryAuthorList = "SELECT  author.name, COUNT(booklist.book_id) as num "
			. "FROM author "
			."LEFT JOIN booklist ON author.id = booklist.author_id "
			. "GROUP BY (author.id)";
		$statementAuthorList = $db_link->prepare($queryAuthorList);
		$statementAuthorList->execute();
			while ($rowResultAuthorList=$statementAuthorList->fetch()) {
					echo "<tr>";
					echo "<td>".$rowResultAuthorList['name']."</td>";
					echo "	<td>".$rowResultAuthorList['num']."</td>";
					echo "	<td><a href ='author_detail.php?detail=".$rowResultAuthorList['name']."' >明細</a></td>";
					 echo "</tr>";
			}
	} catch (PDOException $e) {
			print "資料庫連線失敗，訊息：{$e->getMessage()} <br/>";
			die();
	}
?>

</table>