<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Reduce a collection to one element
 *
 * @param callable $f callback
 * @param mixed $inital initial value
 * @param array $collection collection
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reduce($f = null, $inital = null, $collection = null) {
	$reduce = curry3(function (callable $f, $inital, $collection) {
		return array_reduce($collection, $f, $inital);
	});

	return $reduce(...func_get_args());
}
