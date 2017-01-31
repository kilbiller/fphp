<?php

namespace fphp;

/**
 * Returns a function that accepts arguments in reversed order of the function passed in param.
 * 
 * @param function $f function to flip arguments for
 * @return function
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flip(...$args) {
	$flip = function($f) {
		return function () use ($f) {
			$args = reverse(func_get_args());
			return $f(...$args);
		};
	};

	return curryN($flip, 1)(...$args);
}
