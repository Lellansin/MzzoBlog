<?php 

class Controller{
	
	private $catolog;	// 控制器目录
	private $section;	// 控制器对象
	public  $id;		// 查询参数
	public  $path;
	
	function Controller($path)
	{
		// 回头将获取控制器目录等方法放在该控制器类中

		$this->path = $path;

		$this->call();
	}

	// 调用具体的控制器
	public function call()
	{
		// echo slef::path;
		// print_r($this);
		// 在这里使用 require
		require $this->path;
	}

}


?>