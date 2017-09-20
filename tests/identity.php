<?php

declare(strict_types = 1);

use function fphp\identity;

describe('identity', function () {
	it('should return the first argument it receives', function () {
		expect(identity('hello'))->toBe('hello');
	});

	it('should be curried', function () {
		expect(identity()('hello'))->toBe('hello');
	});
});
