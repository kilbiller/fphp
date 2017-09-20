<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Check if collection includes value.
 *
 * @param mixed $value value
 * @param array $collection collection
 * @return bool Returns true if value exist in collection, else false.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function includes($value = null, $collection = null) {
	$includes = curry2(function ($value, $collection) {
		foreach ($collection as $element) {
			if ($element === $value) {
				return true;
			}
		}

		return false;
	});

	return $includes(...func_get_args());
}
