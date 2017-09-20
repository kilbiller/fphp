<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Get first element of an array
 *
 * @param array $array array
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function first($array = null) {
	$first = curry1(function ($array) {
		return array_values($array)[0];
	});

	return $first(...func_get_args());
}
