<?php

use function fphp\identity;

describe('identity', function () {
	it('should return the first argument it receives', function () {
		expect(identity('hello'))->toBe('hello');
	});
});
