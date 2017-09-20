<?php

declare(strict_types = 1);

use function fphp\negate;

describe('negate', function () {
	it('should negate a predicate', function () {
		$isOrange = function ($x) {
			return $x === 'orange';
		};

		$isNotOrange = negate($isOrange);

		expect($isNotOrange('orange'))->toBe(false);
	});

	it('should be curried', function () {
		$isOrange = function ($x) {
			return $x === 'orange';
		};

		$isNotOrange = negate()($isOrange);

		expect($isNotOrange('orange'))->toBe(false);
	});
});
