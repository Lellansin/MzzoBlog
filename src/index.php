<?php
//定义一个控制器变量来检测控制器路径是否存在或者正确
$controllerUrl="home/index.html";
//获取路径的URL
$pathUrl=$_GET['path'];
//把获取到的路径与控制器变量进行判断；
if (strcmp($controllerUrl,$pathUrl)) {
	//判断结果为假则调转为默认路径
	header("Location:index.php?path=home/index.html"); 
}
require "./kernel/mzzo.php";



/* 

$host= $_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'];
$pathUrl=$host."?path=home/index.html";

index.php

作为一个框架的入口，我们通常不会在这里放置什么逻辑代码

那么当用户请求的的时候我们应该干些什么？

1.做一些基本的配置，过滤用户的请求（如禁止ip名单）
2.根据url找到这个地方的【控制器】（框架来做）
3.如果有【控制器】的话根据控制的代码来操作，在加载对应的【界面】，如果没有控制器的话，我们就默认加载一个页面（如404）
4.也就是说不论有没有控制器，我们的框架都要判断请款然最后去加载一个页面



第一步

调用 /kernel/mzzo.php ，这个文件应该是我们框架的核心

第二部

在 mzzo.php 中根据 url 找到对应的控制器 /controller/public/index.php

并且在控制器中定义一个变量 $hi

第三部

在对应的视图模板 /view/public/index.html 中输出对应控制器中的变量 $hi

*/

?>