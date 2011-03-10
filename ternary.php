<?php
class a 
{
	private $var1 = 'initialval';
	private $var2;
	
	public function __construct($var1 = null, $var2 = null)
	{
		empty($var1) ?: $this->var1 = $var1;
		empty($var2) ?: $this->var2 = $var2;
	}
}

$foo = new a(null, 'test');
var_dump($foo);
?>