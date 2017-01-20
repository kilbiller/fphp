<?php

namespace fphp;

/**
 * Remove all elements of a collection that fail the predicate.
 *
 * @param callable $f predicate
 * @param array|string $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function filter(...$args) {
	$filter = function (callable $f, $collection) {
		if (is_string($collection)) {
			$collection = str_split($collection);
		}

		return array_values(array_filter($collection, $f));
	};

	return curryN($filter, 2)(...$args);
}
