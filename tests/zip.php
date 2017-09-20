<?php

declare(strict_types = 1);

use function fphp\zip;

describe('zip', function () {
	it('should zip arrays', function () {
		$res = zip([1, 2, 3], [1, 2, 3, 4]);

		expect($res)->toBe([[1, 1], [2, 2], [3, 3]]);
	});

	it('should be curried', function () {
		$res = zip([1, 2, 3]);
		$res = $res([1, 2, 3, 4]);

		expect($res)->toBe([[1, 1], [2, 2], [3, 3]]);
	});
});
