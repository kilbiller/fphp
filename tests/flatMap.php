<?php

use function fphp\flatMap;

describe('flatMap', function () {
	it('should duplicate every element of the array', function () {
		$f = function($x) { return [$x, $x]; };

		$res = flatMap($f, [1, 2]);

		expect($res)->toBe([1, 1, 2, 2]);
	});

	it('should be curried', function () {
		$f = function($x) { return [$x, $x]; };

		$res = flatMap($f);
		$res = $res([1, 2]);

		expect($res)->toBe([1, 1, 2, 2]);
	});
});
