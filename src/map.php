<?php

namespace fphp;

/**
 * Apply callback over each element of a collection
 *
 * @param callable $f callback
 * @param array $data collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function map(...$args) {
	$map = function (callable $f, $data) {
		return array_map($f, $data);
	};

	return curry($map)(...$args);
}
