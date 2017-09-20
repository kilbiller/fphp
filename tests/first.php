<?php

declare(strict_types = 1);

use function fphp\first;

describe('first', function () {
	it('should get the first element of the array', function () {
		expect(first([1, 2, 3, 4]))->toBe(1);
	});

	it('should be curried', function () {
		expect(first()([1, 2, 3, 4]))->toBe(1);
	});
});
