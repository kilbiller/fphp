<?php

namespace fphp;

/**
 * Returns a string made by inserting the separator between each element and concatenating all the elements into a single string.
 *
 * @param string $separator separator
 * @param array $collection collection
 * @return string
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function join(...$args) {
	$join = function($separator, $collection) {
		return implode($separator, $collection);
	};

	return curryN($join, 2)(...$args);
}
