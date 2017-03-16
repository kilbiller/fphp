<?php

namespace fphp;

function uniqWith(...$args) {

	/**
	 * Return an array without duplicates using a comparator function
	 *
	 * @param Callable $comparator comparator function
	 * @param array $collection collection
	 * @return array
	 * @author Rémy Peru <peru.remy@gmail.com>
	 */
	$uniqWith = function (Callable $comparator, array $collection) {
		$uniqArray = [];

		foreach($collection as $item) {
			$isUnique = true;

			for ($i = 0; $i < count($uniqArray); $i++) {
				if ($comparator($item, $uniqArray[$i])) {
					$isUnique = false;
					break;
				}
			}

			if ($isUnique) {
				$uniqArray[] = $item;
			}
		}

		return $uniqArray;
	};

	return curryN($uniqWith, 2)(...$args);
}
