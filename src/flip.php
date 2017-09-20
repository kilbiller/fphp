<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Returns a function that accepts arguments in reversed order of the function passed in param.
 *
 * @param callable $f function to flip arguments for
 * @return callable
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flip($f = null) {
	$flip = curry1(function ($f) {
		return function () use ($f) {
			$args = reverse(func_get_args());
			return $f(...$args);
		};
	});

	return $flip(...func_get_args());
}
