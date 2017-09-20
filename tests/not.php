<?php

declare(strict_types = 1);

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

	it('should work with functions', function () {
		$predicate = function ($x) {
			return $x === 'orange';
		};

		expect(not($predicate('orange')))->toBe(false);
	});
});
