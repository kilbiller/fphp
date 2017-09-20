<?php

declare(strict_types = 1);

use function fphp\none;

describe('none', function () {
	it('should return true', function () {
		$res = none('is_int', ['dfgdf', 'gffd', 'not a number', 'xfr']);

		expect($res)->toBe(true);
	});

	it('should return false', function () {
		$res = none('is_int', [1, 2, 'not a number', 4]);

		expect($res)->toBe(false);
	});

	it('should be curried', function () {
		$res = none('is_int');
		$res = $res([1, 2, 3, 4]);

		expect($res)->toBe(false);
	});
});
