<?php

namespace fphp;

function reduce(...$args) {
	$reduce = function (callable $f, $inital, $data) {
		return array_reduce($data, $f, $inital);
	};

	return curry($reduce)(...$args);
}
