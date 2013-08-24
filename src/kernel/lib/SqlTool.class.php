<?php

/**
 * 数据库操作类
 *
 * @author huangxh
 * @version 1.0
 */


 	class SqlTool{

 		private $conn;
 		private $dbname="article";
 		private $host="localhost";
 		private $user="root";
 		private $password="";

 		function SqlTool()
 		{
 			$this->conn=mysql_connect($this->host,$this->user,$this->password);
 			if (!$this->conn) {
 				die("数据库连接失败".mysql_error());
 			} 			
 			mysql_select_db($this->dbname,$this->conn);
 			mysql_query("set names utf8")or die(mysql_error());
 		}

/**
 * 	数据库查询
 *	语句 select
 * 	
 */

 		public function dql($sql){
 			$array=array();
 			$result=mysql_query($sql,$this->conn)or die(mysql_error());
 			//返回每天内容的栏目名称
 			while ($row=mysql_fetch_assoc($result)) {
 				$array=$row;
 			}
 			mysql_free_result($result);
 			return $array;
 			// 在这里请以数组的形式返回查询结果
 		}


 	}


?>