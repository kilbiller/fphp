<?php

use function fphp\reverse;

describe('reverse', function () {
	it('should reverse arrays', function () {
		expect(reverse([1, 2, 3, 4]))->toBe([4, 3, 2, 1]);
	});

	it('should reverse strings', function () {
		expect(reverse('1234'))->toBe('4321');
	});

	it('should be curried', function () {
		expect(reverse()([1, 2, 3, 4]))->toBe([4, 3, 2, 1]);
	});
});
