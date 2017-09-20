<?php

declare(strict_types = 1);

use function fphp\filter;

describe('filter', function () {
	it('should remove every dogs', function () {
		$f = function ($x) {
			return $x !== 'dog';
		};

		$res = filter($f, ['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['cat', 'cat', 'cat']);
	});

	it('should be curried', function () {
		$f = function ($x) {
			return $x !== 'dog';
		};

		$res = filter($f);
		$res = $res(['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['cat', 'cat', 'cat']);
	});

	it('should work on strings', function () {
		$f = function ($x) {
			return $x !== 'N';
		};

		$res = filter($f, 'YN');

		expect($res)->toBe(['Y']);
	});

	it('should work with non contiguous arrays', function () {
		$f = function ($x) {
			return $x !== 'dog';
		};

		$res = filter($f, [1 => 'cat', 3 => 'cat', 8 => 'dog', 6 => 'cat', 12 => 'dog']);

		expect($res)->toBe(['cat', 'cat', 'cat']);
	});
});
