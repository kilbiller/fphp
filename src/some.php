<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Return true if at least one element in the collection evaluate predicate function to true, else false.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return bool
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function some($f = null, $collection = null) {
	$some = curry2(function ($f, $collection) {
		foreach ($collection as $value) {
			if ($f($value)) {
				return true;
			}
		}

		return false;
	});

	return $some(...func_get_args());
}
