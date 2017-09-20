<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Return an array without duplicates
 *
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function uniq($collection = null) {
	$uniq = curry1(function (array $collection) {
		$isEqual = function ($a, $b) {
			return $a == $b;
		};

		return uniqWith($isEqual, $collection);
	});

	return $uniq(...func_get_args());
}
