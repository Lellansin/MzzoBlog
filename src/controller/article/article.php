
<?php

$body = "./view/article/article.html";

if ($id) {	

	$sqltool = new SqlTool();
	$sql="select * from mz_posts where id=".$id;
	$result=$sqltool->dql($sql);
	
	if (!$result) {
		echo "没有找到该文章";
		$body = "./view/public/public.html";
	}
}

// require $view;
require "./view/public/index.html";


/*

通过路径找到要查询的文章id

调用数据库操作类查询相应id的文章

*/
?>