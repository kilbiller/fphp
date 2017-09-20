<?php

declare(strict_types = 1);

use function fphp\flip;

describe('flip', function () {
	it('should reverse a function arguments', function () {
		$f = function ($a, $b, $c) {
			return [$a, $b, $c];
		};

		$flipped = flip($f);

		expect($flipped(1, 2, 3))->toBe([3, 2, 1]);
	});

	it('should be curried', function () {
		$f = function ($a, $b, $c) {
			return [$a, $b, $c];
		};

		$flipped = flip()($f);

		expect($flipped(1, 2, 3))->toBe([3, 2, 1]);
	});

	it('should work with a callable', function () {
		$flipped = flip('explode');

		expect($flipped('m a m a', ' '))->toBe(['m', 'a', 'm', 'a']);
	});
});
