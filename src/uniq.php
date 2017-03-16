<?php

namespace fphp;

/**
 * Return an array without duplicates
 *
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function uniq(...$args) {
	$uniq = function (array $collection) {
		$isEqual = function ($a, $b) {
			return $a == $b;
		};

		return uniqWith($isEqual, $collection);
	};

	return curryN($uniq, 1)(...$args);
}
