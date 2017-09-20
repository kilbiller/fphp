<?php

declare(strict_types = 1);

use function fphp\concat;

describe('concat', function () {
	it('should concat two arrays', function () {
		$res = concat([1], [2]);

		expect($res)->toBe([1, 2]);
	});

	it('should concat two strings', function () {
		$res = concat('hello ', 'world');

		expect($res)->toBe('hello world');
	});
});
