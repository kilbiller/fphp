<?php

declare(strict_types = 1);

use function fphp\last;

describe('last', function () {
	it('should get the last element of the array', function () {
		expect(last([1, 2, 3, 4]))->toBe(4);
	});

	it('should be curried', function () {
		expect(last()([1, 2, 3, 4]))->toBe(4);
	});
});
