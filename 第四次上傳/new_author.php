<title> 作著發表</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	
(4) 作著發表(new_author.php)，發表作著，名稱、描述、書皮照片上傳。<br /> <hr />
<form name="form" method="post" action="new2.php">
作&nbsp;&nbsp;者&nbsp;&nbsp;名：
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$queryAuthorName ="SELECT author.id AS '作者ID',author.name AS '作者' FROM author";
$statementAuthorName = $db_link->prepare($queryAuthorName);
$statementAuthorName->execute();
echo "<select name='sel2' size='1'> ";
	while ($rowResultstatementAuthorName=$statementAuthorName->fetch()) {
		echo "<option value='" .$rowResultstatementAuthorName['作者ID']. "'>".$rowResultstatementAuthorName['作者']."</option>";
}
echo "</select>";
?>
	<br>
	
	
	
	
	
	書&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="text" name="bookname" /><br>
	書的描述：<input type="text" name="book" /><br>
	書皮位置：<input type="file" name="bookname" /><br>
	<input type="submit" name="button" value="送出" />&nbsp;&nbsp;
</form>