<?php

/*

在这里调用 /kernel/lib/SqlTool.class.php 使得之后的控制器都能够调用数据库操作类

*/

$path=$_GET["path"];
$path="./controller/".substr($path,0,-4)."php";
require "$path";


?>