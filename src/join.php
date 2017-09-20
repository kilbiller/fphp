<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Returns a string made by inserting the separator between each element and concatenating all the elements into a single string.
 *
 * @param string $separator separator
 * @param array $collection collection
 * @return string
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function join($separator = null, $collection = null) {
	$join = curry2(function ($separator, $collection) {
		return implode($separator, $collection);
	});

	return $join(...func_get_args());
}
