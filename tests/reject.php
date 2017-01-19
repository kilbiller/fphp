<?php

use function fphp\reject;

describe('reject', function () {
	it('should keep every dogs', function () {
		$f = function($x) { return $x !== 'dog'; };

		$res = reject($f, ['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['dog', 'dog']);
	});

	it('should be curried', function () {
		$f = function($x) { return $x !== 'dog'; };

		$res = reject($f);
		$res = $res(['cat', 'cat', 'dog', 'cat', 'dog']);

		expect($res)->toBe(['dog', 'dog']);
	});
});
