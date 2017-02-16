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
		$uniqArray = [];

		foreach($collection as $item) {
			if (!includes($item, $uniqArray)) {
				$uniqArray[] = $item;
			}
		}

		return $uniqArray;
	};

	return curryN($uniq, 1)(...$args);
}
