<?php
require "./kernel/lib/SqlTool.class.php";
/*

在这里调用 /kernel/lib/SqlTool.class.php 使得之后的控制器都能够调用数据库操作类

*/

$path=$_GET["path"];
	$ids=(strpos($path,'_')+1);
	$ide=(strpos($path,'.')-$ids);
	$id=substr($path,$ids,$ide);


$path="./controller/".substr_replace($path,'.',$ids-1)."php";
require "$path";


?>