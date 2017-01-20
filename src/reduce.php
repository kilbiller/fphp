<?php

namespace fphp;

/**
 * Reduce a collection to one element
 *
 * @param callable $f callback
 * @param array $collection collection
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reduce(...$args) {
	$reduce = function (callable $f, $inital, $collection) {
		return array_reduce($collection, $f, $inital);
	};

	return curryN($reduce, 3)(...$args);
}
