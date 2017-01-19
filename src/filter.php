<?php

namespace fphp;

/**
 * Remove all elements of a collection that fail the predicate
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function filter(...$args) {
	$filter = function (callable $f, $collection) {
		return array_values(array_filter($collection, $f));
	};

	return curry($filter)(...$args);
}
