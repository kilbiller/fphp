<?php

use function fphp\map;

describe('map', function () {
	it('should add one to every element of the array', function () {
		$f = function($x) { return $x + 1; };

		$res = map($f, [1, 2]);

		expect($res)->toBe([2, 3]);
	});

	it('should be curried', function () {
		$f = function($x) { return $x + 1; };

		$res = map($f);
		$res = $res([1, 2]);

		expect($res)->toBe([2, 3]);
	});

	it('should work with non contiguous arrays', function () {
		$f = function($x) { return $x + 1; };

		$res = map($f);
		$res = $res([0 => 1, 4 => 2]);

		expect($res)->toBe([2, 3]);
	});
});
