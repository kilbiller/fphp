<?php

namespace fphp;

/**
 * Checks if predicate is truthy for all elements of collection.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return boolean Returns true if all elements pass the predicate check, else false.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function every(...$args) {
	$every = function (callable $f, $collection) {
		foreach ($collection as $element) {
	        if (!$f($element)) {
	            return false;
	        }
    	}

		return true;
	};

	return curryN($every, 2)(...$args);
}
