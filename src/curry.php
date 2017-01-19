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

	if (method_exists('Closure', 'fromCallable')) {
		$reflection = new ReflectionFunction(Closure::fromCallable($f));
	} else {
		if (is_string($f) && strpos($f, '::', 1) !== false) {
            $reflection = new ReflectionMethod($f);
        } elseif (is_array($f) && count($f) === 2) {
            $reflection = new ReflectionMethod($f[0], $f[1]);
        } elseif (is_object($f) && method_exists($f, '__invoke')) {
            $reflection = new ReflectionMethod($f, '__invoke');
        } else {
            $reflection = new ReflectionFunction($f);
        }
	}

	$count = $reflection->getNumberOfRequiredParameters();

	return curryN($f, $count);
}
