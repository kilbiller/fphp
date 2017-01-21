<?php

namespace fphp;

/**
 * Reverse an array or a string
 *
 * @param string|array $collection collection
 * @return string|array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reverse(...$args) {
	$reverse = function($collection) {
		return (is_string($collection)) ? strrev($collection) : array_reverse($collection);
	};

	return curryN($reverse, 1)(...$args);
}
