<?php

declare(strict_types = 1);

use function fphp\curryN;

describe('curryN', function () {
	it('should curry a function with 2 args', function () {
		$f = function ($a, $b) {
			return $a + $b;
		};

		$curried = curryN($f, 2);

		$res = $curried(1);
		$res = $res(3);

		expect($res)->toBe(4);
	});

	it('should curry a function with 3 args', function () {
		$f = function ($a, $b, $c) {
			return $a + $b + $c;
		};

		$curried = curryN($f, 3);

		$res = $curried(1, 3);
		$res = $res(4);

		expect($res)->toBe(8);
	});
});
