<?php

namespace fphp;

/**
 * Map a function over a collection and flatten the result by one-level
 *
 * @param array $array array
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flatMap(...$args) {
	$flatMap = function (callable $f, $data) {
		return flatten(map($f, $data));
	};

	return curry($flatMap)(...$args);
}
