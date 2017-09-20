<?php

declare(strict_types = 1);

use function fphp\filter;
use function fphp\flow;
use function fphp\map;

describe('flow', function () {
	it('should compose filter and map', function () {
		$keepOnlyTwos = filter(function ($x) {
			return $x == 2;
		});

		$multiplyByTwo = map(function ($x) {
			return $x * 2;
		});

		$res = flow(
			$keepOnlyTwos,
			$multiplyByTwo
		)([2, 0, 1, 2, 3, 2]);

		expect($res)->toBe([4, 4, 4]);
	});
});
