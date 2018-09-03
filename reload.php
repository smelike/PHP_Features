<?php

	
	/*
		重载(overloading) 是指动态地“创建”类属性和方法。
		
		PHP 是通过魔术方法(magic methods)来实现的
		
		当调用当前环境下未定义或不可见的类属性或方法时，重载方法会被调用。
		
		后面将使用“不可访问属性（inaccessible properties）”和“不可访问方法（inaccessible methods）” 来称呼这些未定义或不可见的类属性或方法
		
		所有的重载方法，都必须被声明为 public
		
		Note： 这些魔术方法的参数都不能通过引用传递。
		
		Note：PHP中的“重载”与其他绝大多数面向对象语言不通。传统的“重载”是用于提供多个同名的类方法，但各方法的参数类型和个数不同。
		
		
		__callStatic()魔术方法。可见性未设置为 public 或未声明为 static 的时候会产生一个警告。
		
		$trace = debug_backtrace();
		
		
		方法重载
		--------
		
		在对象中调用一个不可访问方法时，__call() 会被调用。

		在静态上下文中调用一个不可访问方法时，__callStatic() 会被调用。
		
	*/
	
	class MethodTest
	{
		public function __call($method, $arguments)
		{
			echo 	"Calling object method '$method' "
					. implode(', ', $arguments) . "\n";
					
		}
		
		public static function __callStatic($method, $arguments)
		{
			
			echo	 "Calling static method '$method' "
					. implode(', ', $arguments) . "\n";
		}
		
		public function test() {
			
			var_dump(static::class);
		}
	}
	
	
	
	
	$obj = new MethodTest;
	$obj->runTest('in object context');
	
	echo "<hr/>";
	
	MethodTest::runTest('in static context', '大事发生范德萨');
	
	echo "<hr/>";
	
	$obj->test();
	
	
	
	/*
		ThinkPHP 中的 controller
		
		use think\facade\Log;
		
		
		Log::critical("接收到的gps信息" . var_export($param, 1));
		
		调用 Log 类，think\facade\Log 类继承了 think\Facade
		
		Facade 类，通过 __callStatic() 实现了方法重载/调用
		
		
	*/
