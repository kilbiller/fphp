<?php

namespace fphp;

/**
 * Apply callback over each element of a collection
 *
 * @param callable $f callback
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function map(...$args) {
	$map = function (callable $f, $collection) {
		return array_map($f, $collection);
	};

	return curry($map)(...$args);
}
