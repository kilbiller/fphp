<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Return true for every falsy value and false for every truthy value.
 *
 * @param mixed $value value
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function not($value = null) {
	$not = curry1(function ($value) {
		return !$value;
	});

	return $not(...func_get_args());
}
