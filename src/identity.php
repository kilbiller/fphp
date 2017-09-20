<?php

declare(strict_types = 1);

namespace fphp;

function identity($value = null) {
	$identity = curry1(function ($value) {
		return $value;
	});

	return $identity(...func_get_args());
}
