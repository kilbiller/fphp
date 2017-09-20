<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Returns a function that returns the opposite of the function passed in argument.
 *
 * @param callable $predicate predicate to negate
 * @return callable
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function negate($predicate = null) {
	$negate = curry1(function ($predicate) {
		return function () use ($predicate) {
			$args = func_get_args();
			return !$predicate(...func_get_args());
		};
	});

	return $negate(...func_get_args());
}
