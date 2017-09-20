<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Map a function over a collection and flatten the result by one-level
 *
 * @param callable $f callback
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flatMap($f = null, $collection = null) {
	$flatMap = curry2(function (callable $f, $collection) {
		return flatten(map($f, $collection));
	});

	return $flatMap(...func_get_args());
}
