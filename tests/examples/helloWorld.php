<?php

declare(strict_types = 1);

use function fphp\flow;
use function fphp\filter;
use function fphp\join;
use function fphp\flatten;

describe('Hello World', function () {
	it('should convert to Hello World !!', function () {
		$str = [['Hefllof'], [' '], ['Wofrldf !!']];

		$res = flow(
			flatten(),
			join(''),
			filter(function ($x) {
				return $x !== 'f';
			}),
			join('')
		)($str);

		expect($res)->toBe('Hello World !!');
	});
});
