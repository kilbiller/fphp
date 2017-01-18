<?php

namespace fphp;

function map(...$args) {
	$map = function (callable $f, $data) {
		return array_map($f, $data);
	};

	return curry($map)(...$args);
}
