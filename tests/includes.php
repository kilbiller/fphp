<?php

declare(strict_types = 1);

use function fphp\includes;

describe('includes', function () {
	it('should return true', function () {
		$res = includes(3, [1, 2, 3, 4]);

		expect($res)->toBe(true);
	});

	it('should return false', function () {
		$res = includes('orange', [1, 2, 'not a number', 4]);

		expect($res)->toBe(false);
	});

	it('should be curried', function () {
		$res = includes(1);
		$res = $res([1, 2, 3, 4]);

		expect($res)->toBe(true);
	});
});
