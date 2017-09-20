<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Complement of filter
 *
 * @param callable $f function
 * @param array $collection collection
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function reject($f = null, $collection = null) {
	$reject = curry2(function (callable $f, $collection) {
		$result = [];
		foreach ($collection as $element) {
			if (!$f($element)) {
				$result[] = $element;
			}
		}

		return $result;
	});

	return $reject(...func_get_args());
}
