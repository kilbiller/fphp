<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Apply callback over each element of a collection
 *
 * @param callable $f callback
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function map($f = null, $collection = null) {
	$map = curry2(function (callable $f, array $collection) {
		return array_values(array_map($f, $collection));
	});

	return $map(...func_get_args());
}
