<?php
namespace My\Files;
class Test
{
    public function __construct()
    {
        echo __NAMESPACE__ . PHP_EOL;
        echo get_class($this) . PHP_EOL;
    }
}

function strlen($string)
{
    return \strlen($string) + 5;
}
?>