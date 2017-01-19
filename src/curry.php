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
		if (is_string($function) && strpos($function, '::', 1) !== false) {
            $reflection = new ReflectionMethod($function);
        } elseif (is_array($function) && count($function) === 2) {
            $reflection = new ReflectionMethod($function[0], $function[1]);
        } elseif (is_object($function) && method_exists($function, '__invoke')) {
            $reflection = new ReflectionMethod($function, '__invoke');
        } else {
            $reflection = new ReflectionFunction($function);
        }
	}

	$count = $reflection->getNumberOfRequiredParameters();

	return curryN($f, $count);
}
