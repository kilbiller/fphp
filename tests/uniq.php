<?php

use function fphp\uniq;

describe('uniq', function () {
	it('should return input array without duplicates', function () {
		$res = uniq([1, 2, 3, 3 ,4 ,5 , 'orange', 'green', 'orange']);

		expect($res)->toBe([1, 2, 3, 4 ,5 , 'orange', 'green']);
	});

	it('should be curried', function () {
		$res = uniq();
		$res = $res([1, 2, 3, 3 ,4 ,5 , 'orange', 'green', 'orange']);

		expect($res)->toBe([1, 2, 3, 4 ,5 , 'orange', 'green']);
	});

	it('should work with non contiguous arrays', function () {
		$res = uniq([0 => 1, 4 => 2, 8 => 2]);

		expect($res)->toBe([1, 2]);
	});
});
