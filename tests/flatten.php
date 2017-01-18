<?php

use function fphp\flatten;

describe('flatten', function () {
	it('should flatten the array one level deep', function () {
		$f = function($x) { return [$x, $x]; };

		$res = flatten([1, 2, [3, [4, [5, 6], 7], 8], 9]);

		expect($res)->toBe([1, 2, 3, [4, [5, 6], 7], 8, 9]);
	});
});
