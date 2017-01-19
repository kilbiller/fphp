<?php

use function fphp\concat;

describe('concat', function () {
	it('should concat two arrays', function () {
		$res = concat([1], [2]);

		expect($res)->toBe([1, 2]);
	});

	it('should concat three arrays', function () {
		$res = concat([1], [2], [3]);

		expect($res)->toBe([1, 2, 3]);
	});
});
