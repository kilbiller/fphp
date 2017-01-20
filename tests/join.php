<?php

use function fphp\join;

describe('join', function () {
	it('should join all array elements', function () {
		expect(join('', [1, 2, 3, 4]))->toBe('1234');
	});

	it('should be curried', function () {
		$spacer = join(' ');
		expect($spacer([1, 2, 3, 4]))->toBe('1 2 3 4');
	});
});
