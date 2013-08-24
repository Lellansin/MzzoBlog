<?php

header('Content-type: text/html; charset=utf8');

if (!isset($_GET['path'])) {
	header("Location: index.php?path=public/index.html"); 	
}

//把获取到的路径与控制器变量进行判断；
require "./kernel/mzzo.php";


/* 


访问文章
index.php?path=article/article_1.html

*/

?>