<?php

namespace fphp;

/**
 * Remove all elements of a collection that fail the predicate
 *
 * @param callable $f predicate
 * @param array $data collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function filter(...$args) {
	$filter = function (callable $f, $data) {
		return array_values(array_filter($data, $f));
	};

	return curry($filter)(...$args);
}
