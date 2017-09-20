<?php

declare(strict_types = 1);

use function fphp\curry;

describe('curry', function () {
	it('should curry a function with 2 args', function () {
		$f = function ($a, $b) {
			return $a + $b;
		};

		$curried = curry($f);

		$res = $curried(1);
		$res = $res(3);

		expect($res)->toBe(4);
	});

	it('should curry a function with 3 args', function () {
		$f = function ($a, $b, $c) {
			return $a + $b + $c;
		};

		$curried = curry($f);

		$res = $curried(1, 3);
		$res = $res(4);

		expect($res)->toBe(8);
	});

	it('should still work for other type of callables', function () {
		$curried = curry('explode');
		expect($curried(',')('1,2'))->toBe(['1', '2']);
	});
});
