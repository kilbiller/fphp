<?php

declare(strict_types = 1);

use function fphp\some;

describe('filter', function () {
	it('should return true', function () {
		$f = function ($x) {
			return $x === 'dog';
		};

		$res = some($f, ['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(true);
	});

	it('should return false', function () {
		$f = function ($x) {
			return $x === 'lion';
		};

		$res = some($f, ['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(false);
	});

	it('should be curried', function () {
		$f = function ($x) {
			return $x === 'dog';
		};

		$res = some($f);
		$res = $res(['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(true);
	});
});
