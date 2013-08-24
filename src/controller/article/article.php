
<?php
header("Content-Type: text/html; charset=utf8");
$sql="select * from mz_posts where id=$id";
$sqltool=new SqlTool();
$result=$sqltool->dql($sql);
if (!$result) {
	echo "没有找到该文章";
	exit();
}

require "./view/article/article.html";
/*

通过路径找到要查询的文章id

调用数据库操作类查询相应id的文章

*/
?>