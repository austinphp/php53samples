<?php
require_once 'namespaces.php';
$a = new \My\Files\Test();

use \My\Files as Files;
$a = new Files\Test();

echo strlen('test') . PHP_EOL;
?>