<?php

namespace fphp;

use ReflectionFunction;
use Closure;

function curry(callable $f) {
	$reflection = new ReflectionFunction(Closure::fromCallable($f));

	$count = $reflection->getNumberOfRequiredParameters();

	return curry_n($f, $count);
}
