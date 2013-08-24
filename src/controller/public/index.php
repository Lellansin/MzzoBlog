<?php


$test = "ceshi";



// 这里包含页面就相当于把其中的到吗都包含了过来，也就是这个控制器和那个HTML 是在同一个文件的样子

$body = "public.html";


require "./view/public/index.html";
/*

这个控制器先不做别的什么事情，就定义一个变量用来在view的【界面】中调用

*/


?>