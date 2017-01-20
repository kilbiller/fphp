<?php

namespace fphp;

/**
 * Map a function over a collection and flatten the result by one-level
 *
 * @param callable $f callback
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flatMap(...$args) {
	$flatMap = function (callable $f, $collection) {
		return flatten(map($f, $collection));
	};

	return curryN($flatMap, 2)(...$args);
}
