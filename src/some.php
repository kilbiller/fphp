<?php

namespace fphp;

/**
 * Return true if at least one element in the collection evaluate predicate function to true, else false.
 *
 * @param function $f predicate
 * @param array $collection collection
 * @return [type]
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function some(...$args) {
	$some = function ($f, $collection) {
		foreach ($collection as $value) {
			if ($f($value)) {
				return true;
			}
		}

		return false;
	};

	return curryN($some, 2)(...$args);
}
