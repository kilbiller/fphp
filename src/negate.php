<?php

namespace fphp;

/**
 * Returns a function that returns the opposite of the function passed in argument.
 *
 * @param function $args predicate to negate
 * @return function
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function negate(...$args) {
	$negate = function ($predicate) {
		return function() use ($predicate) {
			$args = func_get_args();
			return !$predicate(...$args);
		};
	};

	return curryN($negate, 1)(...$args);
}
