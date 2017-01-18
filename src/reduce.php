<?php

namespace fphp;

/**
 * Reduce a collection to one element
 *
 * @param callable $f callback
 * @param array $data collection
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reduce(...$args) {
	$reduce = function (callable $f, $inital, $data) {
		return array_reduce($data, $f, $inital);
	};

	return curry($reduce)(...$args);
}
