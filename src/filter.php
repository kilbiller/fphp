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
		$isString = false;
		if (is_string($collection)) {
			$collection = str_split($collection);
			$isString = true;
		}

		$result = array_values(array_filter($collection, $f));

		if ($isString) {
			$result = implode($result);
		}

		return $result;
	};

	return curryN($filter, 2)(...$args);
}
