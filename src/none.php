<?php

namespace fphp;

/**
 * Checks if predicate is falsy for all elements of collection.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return bolean Returns true if all elements pass the predicate check, else false.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function none(...$args) {
	$none = function(callable $f, $collection) {
		foreach ($collection as $element) {
	        if ($f($element)) {
	            return false;
	        }
    	}

		return true;
	};

	return curry($none)(...$args);
}
