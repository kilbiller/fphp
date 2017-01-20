<?php

use function fphp\{flow, filter, join, flatten, identity};

describe('Hello World', function () {
	it('should convert to Hello World !!', function () {
		$str = [['Hefllof'], [' '], ['Wofrldf !!']];

		$res = flow(
			flatten(),
			join(''),
			filter(function ($x) {return $x !== 'f'; }),
			join('')
		)($str);

		expect($res)->toBe('Hello World !!');
	});
});
