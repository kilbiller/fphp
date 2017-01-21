<?php

use function fphp\{compose, filter, map};

describe('compose', function () {
	it('should compose filter and map', function () {
		$keepOnlyTwos = filter(function($x) { return $x == 2; });

		$multiplyByTwo = map(function($x) { return $x * 2; });

		$res = compose(
			$multiplyByTwo,
			$keepOnlyTwos
		)([2, 0, 1, 2, 3, 2]);

		expect($res)->toBe([4, 4, 4]);
	});
});
