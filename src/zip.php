<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Creates a new collection out of the two supplied by pairing up equally-positioned items from both collections.
 * Result is truncated to the shortest list length.
 *
 * @param array $a first collection
 * @param array $b second collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function zip($a = null, $b = null) {
	$zip = curry2(function ($a, $b) {
		$length = min(count($a), count($b));

		$collection = [];
		for ($i = 0; $i < $length; $i++) {
			$collection[] = [$a[$i], $b[$i]];
		}

		return $collection;
	});

	return $zip(...func_get_args());
}
