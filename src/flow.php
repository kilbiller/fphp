<?php

namespace fphp;

/**
 * Compose functions form left to right
 *
 * @param mixed $functions list of functions to compose
 * @return function
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flow(...$functions) {
	$identity = function ($x) { return $x; };

	return array_reduce(
		$functions,
		function($composed, $f) {
			return function ($x) use ($composed, $f) {
                return $f($composed($x));
            };
		},
		$identity
	);
}
