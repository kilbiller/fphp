<?php

namespace fphp;

function flow(...$functions) {
	$identity = function ($x) { return $x; };

	return array_reduce(
		$functions,
		function($composed, $f) {
			return function ($x) use ($composed, $f) {
                return $f($composed($x));
            };
		},
		$identity
	);
}
