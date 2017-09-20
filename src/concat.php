<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Returns the result of concatenating strings or two arrays.
 *
 * @param string|array $a element
 * @param string|array $b element
 * @return string|array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function concat($a = null, $b = null) {
	$concat = curry2(function ($a, $b) {
		if (every('is_string', [$a, $b])) {
			return $a . $b;
		}
		return array_merge($a, $b);
	});

	return $concat(...func_get_args());
}
