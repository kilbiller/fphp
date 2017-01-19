<?php

namespace fphp;

use function fphp\Utils\reflexify;
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

	if (method_exists('Closure', 'fromCallable')) {
		$reflection = new ReflectionFunction(Closure::fromCallable($f));
	} else {
		$reflection = reflexify($f);
	}

	$count = $reflection->getNumberOfRequiredParameters();

	return curryN($f, $count);
}
