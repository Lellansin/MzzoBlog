<?php


/*

1.

要调用核心包的话
最简单的方式自然是 require 和 include
那么这两者之间选用哪一个请百度之后斟酌
注意引用之后的话，当前这个文件的代码就是在 网站根目录的 ./index.php 这个位置执行的代码



2.

那么我们要根据 url 来获取到控制器首先就要定义一套 url 转控制器的规则，在没有开启url重写功能的情况下
就只能通过 $_GET 获取到参数来

例如

http://localhost/index.php?path=home/index.html
获取到的 $_GET 参数是：

Array
(
    [path] => home/index.html
)


接着我们可以通过字符串处理等到我们想要的控制器路径

处理完之后应该获取到路径应该是：

根目录/controller/home/index.php

接着调用这个控制器

*/




?>