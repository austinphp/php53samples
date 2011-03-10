<?php
class a
{
	public static function output()
	{
		echo __CLASS__ . '::output()' . PHP_EOL;
	}
	
	public static function test()
	{
		echo self::output();
	}
	
	public static function bindingsFixed()
	{
		echo static::output();
	}
}

class b extends a
{
	public static function output()
	{
		echo __CLASS__ . '::output()' . PHP_EOL;
	}
	
	public static function __callStatic($name, $args)
	{
		echo "Function $name does not exist, but it was called with " . print_r($args, 1) . PHP_EOL;
	}
}

a::output();
b::output(); //works
b::test(); //doesn't work right
b::bindingsFixed();
b::foo('bar');
?>