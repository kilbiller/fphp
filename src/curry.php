<?php

namespace fphp;

use function fphp\utils\reflexify;
use ReflectionFunction;
use ReflectionMethod;
use Closure;

/**
 * Curry a function
 *
 * @param callable $f function
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function curry(callable $f) {
	$reflection = reflexify($f);
	$count = $reflection->getNumberOfRequiredParameters();

	return curryN($f, $count);
}
