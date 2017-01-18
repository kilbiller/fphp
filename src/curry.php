<?php

namespace fphp;

use ReflectionFunction;
use Closure;

/**
 * Curry a function
 *
 * @param callable $f function
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function curry(callable $f) {
	$reflection = new ReflectionFunction(Closure::fromCallable($f));

	$count = $reflection->getNumberOfRequiredParameters();

	return curryN($f, $count);
}
