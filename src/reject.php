<?php

namespace fphp;

/**
 * Complement of filter
 *
 * @param callable $f function
 * @param array $collection collection
 * @return $array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reject(...$args) {
	$reject = function (callable $f, $collection) {
		$result = [];
	    foreach ($collection as $element) {
	        if (!$f($element)) {
	            $result[] = $element;
	        }
	    }

	    return $result;
	};

	return curryN($reject, 2)(...$args);
}
