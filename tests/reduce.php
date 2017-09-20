<?php

declare(strict_types = 1);

use function fphp\reduce;

describe('reduce', function () {
	it('should add every element', function () {
		$f = function ($carry, $x) {
			return $carry + $x;
		};

		$res = reduce($f, 0, [1, 2]);

		expect($res)->toBe(3);
	});

	it('should be curried', function () {
		$f = function ($carry, $x) {
			return $carry + $x;
		};

		$res = reduce($f);
		$res = $res(0);
		$res = $res([1, 2]);

		expect($res)->toBe(3);
	});
});
