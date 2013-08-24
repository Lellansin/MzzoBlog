<?php

require './kernel/controller.php';
require "./kernel/lib/SqlTool.class.php";

$path = $_GET["path"];
// echo "path 路径：" . $path;
// echo "<br/>";


/***
 * 获取控制器目录
 */
$catalog_pos = strpos($path,'/');
$catalog = substr($path,0,$catalog_pos);
// echo "将要访问的控制器目录：" . $catalog;
// echo "<br/>";


/***
 * 判断是否有id
 */
$id_pos_start = strpos($path,'_');
$id_pos_end= strpos($path,'.');

if ($id_pos_start == 0) {
	// 没有则默认给 0
	$id = 0;
	$id_pos_start = $id_pos_end;
} else {
	// 有则获取id
	$id = substr($path, $id_pos_start + 1, $id_pos_end  - $id_pos_start - 1);
}

/***
 * 获取访问的控制器目标
 */
$section = substr($path, $catalog_pos + 1, $id_pos_start - $catalog_pos - 1);
// echo "将要访问的控制器对象：" . $section;
// echo "<br/>";
// echo "将要访问的id：" . $id;
// echo "<br/>";


// 拼装控制器路径
$path="./controller/".$catalog ."/".$section.".php";
echo $path;
echo "<br/>";

// 调用控制器
// require "$path";


$control = new Controller($path);


/*

现获取目录，在获取对应的控制器对象

请求：
index.php?path=article/article_1.html
输出：
path 路径：article/article_1.html
将要访问的控制器目录：article
将要访问的控制器对象：article
将要访问的id：1
路径：
./controller/article/article.php

请求
index.php?path=public/index.html
输出：
path 路径：public/index.html
将要访问的控制器目录：public
将要访问的控制器对象：index
将要访问的id：1
路径：
./controller/public/index.php

*/



?>