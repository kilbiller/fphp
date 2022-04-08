<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Compose functions from left to right
 *
 * @param callable ...$functions list of functions to compose
 * @return callable
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flow(...$functions) {
	return array_reduce(
		$functions,
		function ($composed, $f) {
			return function ($x) use ($composed, $f) {
				return $f($composed($x));
			};
		},
		'fphp\identity'
	);
}
