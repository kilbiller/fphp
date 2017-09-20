<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Get last element of an array
 *
 * @param array $array array
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function last($array = null) {
	$last = curry1(function (array $array) {
		return array_values(array_slice($array, -1))[0];
	});

	return $last(...func_get_args());
}
