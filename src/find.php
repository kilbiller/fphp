<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Returns the first element predicate returns truthy for.
 *
 * @param callable $f predicate
 * @param array $collection collection
 * @return bool Returns the element if found, else null.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function find($f = null, $collection = null) {
	$find = curry2(function (callable $f, $collection) {
		foreach ($collection as $element) {
			if ($f($element)) {
				return $element;
			}
		}

		return null;
	});

	return $find(...func_get_args());
}
