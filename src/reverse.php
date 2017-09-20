<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Reverse an array or a string
 *
 * @param string|array $collection collection
 * @return string|array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reverse($collection = null) {
	$reverse = curry1(function ($collection) {
		return (is_string($collection)) ? strrev($collection) : array_reverse($collection);
	});

	return $reverse(...func_get_args());
}
