<?php

namespace fphp;

/**
 * Get first element of an array
 *
 * @param array $array array
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function first(...$args) {
	$first = function ($array) {
		return array_values($array)[0];
	};

	return curryN($first, 1)(...$args);
}
