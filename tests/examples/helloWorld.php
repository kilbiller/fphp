<?php

use function fphp\{flow, filter, map, zip, flatten};

describe('Hello World', function () {
	it('should convert to Hello World !!', function () {
		$str = [['Hefllof'], [' '], ['Wofrldf !!']];

		$res = flow(
			'fphp\flatten',
			'implode',
			filter(function ($x) {return $x !== 'f'; }),
			'implode'
		)($str);

		expect($res)->toBe('Hello World !!');
	});
});
