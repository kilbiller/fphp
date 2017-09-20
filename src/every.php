<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Checks if predicate is truthy for all elements of collection.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return bool Returns true if all elements pass the predicate check, else false.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function every($f = null, $collection = null) {
	$every = curry2(function (callable $f, $collection) {
		foreach ($collection as $element) {
			if (!$f($element)) {
				return false;
			}
		}

		return true;
	});

	return $every(...func_get_args());
}
