<?php

use function fphp\filter;

describe('filter', function () {
	it('should remove every dogs', function () {
		$f = function($x) { return $x !== 'dog'; };

		$res = filter($f, ['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['cat', 'cat', 'cat']);
	});

	it('should be curried', function () {
		$f = function($x) { return $x !== 'dog'; };

		$res = filter($f);
		$res = $res(['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['cat', 'cat', 'cat']);
	});

	it('should work on strings', function () {
		$f = function($x) { return $x !== 'N'; };

		$res = filter($f, 'YN');

		expect($res)->toBe(['Y']);
	});
});
