<?php
for ($i = 0; $i < 10000000; $i++) {
	$a = new stdClass();
	$b = new stdClass();
	$a->b = $b;
	$b->a = $a;

}
echo memory_get_peak_usage(true) / 1024 . "KB\n";
?>
