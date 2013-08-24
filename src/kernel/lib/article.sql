
--
-- 表的结构 `mz_posts`
--

CREATE TABLE IF NOT EXISTS `mz_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1297 ;

insert into `mz_posts` (`ID`,  `post_author`,  `post_date`,  `post_date_gmt`,  `post_content`,  `post_title`,  `post_excerpt`,  `post_status`,  `comment_status`,  `ping_status`,  `post_password`,  `post_name`,  `to_ping`,  `pinged`,  `post_modified`,  `post_modified_gmt`,  `post_content_filtered`,  `post_parent`,  `guid`,  `menu_order`,  `post_type`,  `post_mime_type`,  `comment_count`)
values(1, 1, '2013-07-25 17:01:14', '2013-07-25 09:01:14', '这个简单，文章凑个数。\r\n用 ST2 打开 js 文件。\r\n\r\n选择：Tools -> Build System -> New Build System\r\n\r\n然后输入：\r\n[code]\r\n{\r\n	&quot;cmd&quot;: [&quot;node&quot;, &quot;$file&quot;]\r\n}\r\n[/code]\r\n\r\n保存为 NodeJs.sublime-build 然后在 Tools -> Build System 中选择刚刚添加的 NodeJs\r\n接着我们的js随便写个hello\r\n\r\n[code]\r\nconsole.log(&quot;hello world&quot;);\r\n[/code]\r\n\r\n通过 Tools -> Build (Ctrl+B) 来编译，我们来看看效果：\r\n\r\n<a href="http://www.lellansin.com/wp-content/uploads/2013/07/nodejs-sublimetext2.jpg"><img src="http://www.lellansin.com/wp-content/uploads/2013/07/nodejs-sublimetext2.jpg" alt="" title="nodejs-sublimetext2" width="503" height="407" class="alignnone size-full wp-image-1184" /></a>\r\n', 'Sublime Text 2 编译和运行 Nodejs', '', 'inherit', 'open', 'open', '', '1183-revision-2', '', '', '2013-07-25 17:01:14', '2013-07-25 09:01:14', '', 1183, 'http://www.lellansin.com/1183-revision-2.html', 0, 'revision', '', 0);