<?php
$a->count = 1;
$b->count = 32;
$c->count = 17.5;
$d->count = -9;

$countObjects = array($a, $b, $c, $d);

//define on the fly
usort($countObjects, function($a, $b) {
	if ($a->count > $b->count) {
		return 1;
	} else if ($a->count == $b->count) {
		return 0;
	}
	return -1;
});

// store to a variable
$sortReverse = function($a, $b) {
	if ($a->count > $b->count) {
		return -1;
	} else if ($a->count == $b->count) {
		return 0;
	}
	return 1;
};

print_r($countObjects);

usort($countObjects, $sortReverse);

print_r($countObjects);


// use existing variables in scope
$shouldReverse = true; // can't change this after definition of the closure
$sortDependent = function($a, $b) use ($shouldReverse) {
	if ($a->count > $b->count) {
		return $shouldReverse ? -1 : 1;
	} else if ($a->count == $b->count) {
		return 0;
	}
	return $shouldReverse ? 1 : -1;
};

usort($countObjects, $sortDependent);
print_r($countObjects);

var_dump($sortDependent);
