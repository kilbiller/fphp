<?php

namespace fphp;

/**
 * Returns the first element predicate returns truthy for.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return bolean Returns the element if found, else null.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function find(...$args) {
	$find = function(callable $f, $collection) {
		foreach ($collection as $element) {
	        if ($f($element)) {
	            return $element;
	        }
    	}

		return null;
	};

	return curry($find)(...$args);
}
