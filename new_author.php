<title> 作著發表</title>	
<a href="home.php">主目錄</a>&nbsp;&nbsp;	
(4) 作著發表(new_author.php)，發表作著，名稱、描述、書皮照片上傳。<br /> <hr />
<form name="form" method="post" action="new2.php">
作&nbsp;&nbsp;者&nbsp;&nbsp;名：
<?php
header("content-type: text/html; charset=utf-8");
include 'connectmysql.php';
$sql_query ="SELECT author.id AS '作者ID',author.name AS '作者' FROM author";
$result =$db_link->query($sql_query);
echo "<select name='sel2' size='1'> ";
while ($row_result=$result->fetch()) {
		echo "<option value='" .$row_result['作者ID']. "'>".$row_result['作者']."</option>";
}
echo "</select>";
?>
	<br>
	
	
	
	
	
	書&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名：<input type="text" name="bookname" /><br>
	書的描述：<input type="text" name="book" /><br>
	書皮位置：<input type="file" name="bookname" /><br>
	<input type="submit" name="button" value="送出" />&nbsp;&nbsp;
</form>