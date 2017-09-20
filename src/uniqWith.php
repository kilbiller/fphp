<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Return an array without duplicates using a comparator function
 *
 * @param Callable $comparator comparator function
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function uniqWith($comparator = null, $collection = null) {
	$uniqWith = curry2(function (callable $comparator, array $collection) {
		$uniqArray = [];

		foreach ($collection as $item) {
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
	});

	return $uniqWith(...func_get_args());
}
