<?php

declare(strict_types = 1);

use function fphp\find;

describe('find', function () {
	it('should return 3rd element', function () {
		$isThree = function ($x) {
			return $x === 3;
		};
		$res = find($isThree, [1, 2, 3, 4]);

		expect($res)->toBe(3);
	});

	it('should return null', function () {
		$isFive = function ($x) {
			return $x === 5;
		};
		$res = find($isFive, [1, 2, 'not a number', 4]);

		expect($res)->toBe(null);
	});

	it('should be curried', function () {
		$res = find('is_int');
		$res = $res([1, 2, 3, 4]);

		expect($res)->toBe(1);
	});
});
