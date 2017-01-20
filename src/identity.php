<?php

namespace fphp;

function identity(...$args) {
	$identity = function ($value) {
		return $value;
	};

	return curryN($identity, 1)(...$args);
}
