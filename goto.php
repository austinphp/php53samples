<?php
$counter = 0;

increment:
if ($counter < 10) {
	$counter++;
	echo $counter . PHP_EOL;
} else {
	goto end;
}
goto increment;

end:

foo();

function foo() {
	goto end;
}
