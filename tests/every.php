<?php

use function fphp\every;

describe('every', function () {
	it('should return true', function () {
		$res = every('is_int', [1, 2, 3, 4]);

		expect($res)->toBe(true);
	});

	it('should return false', function () {
		$res = every('is_int', [1, 2, 'not a number', 4]);

		expect($res)->toBe(false);
	});

	it('should be curried', function () {
		$res = every('is_int');
		$res = $res([1, 2, 3, 4]);

		expect($res)->toBe(true);
	});
});
