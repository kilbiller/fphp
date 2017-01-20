<?php

use function fphp\not;

describe('not', function () {
	it('should return true', function () {
		$res = not(0);

		expect($res)->toBe(true);
	});

	it('should return false', function () {
		$res = not(true);

		expect($res)->toBe(false);
	});

	it('should be curried', function () {
		$res = not()(true);

		expect($res)->toBe(false);
	});
});
