<?php

namespace fphp;

function filter(...$args) {
	$filter = function (callable $f, $data) {
		return array_values(array_filter($data, $f));
	};

	return curry($filter)(...$args);
}
