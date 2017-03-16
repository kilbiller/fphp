<?php

use function fphp\uniqWith;

describe('uniqWith', function () {

	beforeEach(function () {
		$this->comparator = function($a, $b) {
			return $a === $b;
		};
	});

	it('should return input array without duplicates', function () {
		$res = uniqWith($this->comparator, [1, 2, 3, 3 ,4 ,5 , 'orange', 'green', 'orange']);

		expect($res)->toBe([1, 2, 3, 4 ,5 , 'orange', 'green']);
	});

	it('should be curried', function () {
		$res = uniqWith($this->comparator);
		$res = $res([1, 2, 3, 3 ,4 ,5 , 'orange', 'green', 'orange']);

		expect($res)->toBe([1, 2, 3, 4 ,5 , 'orange', 'green']);
	});

	it('should work with non contiguous arrays', function () {
		$res = uniqWith($this->comparator, [0 => 1, 4 => 2, 8 => 2]);

		expect($res)->toBe([1, 2]);
	});

	it('should work for my use case', function () {
		$order = [
			'items' => [
				['user' => '1444', 'ticket' => '2ae6eeb0-0a75-11e7-93ae-92361f002671'],
				['user' => '1222', 'ticket' => '2ae6eeb0-0a75-11e7-93ae-92361f002671'],
				['user' => '1444', 'ticket' => '2ae6eeb0-0a75-11e7-93ae-92361f002671']
			]
		];

		$comparator = function ($a, $b) {
			return $a['user'] == $b['user'] && $a['ticket'] == $b['ticket'];
		};

		$expected = [
			['user' => '1444', 'ticket' => '2ae6eeb0-0a75-11e7-93ae-92361f002671'],
			['user' => '1222', 'ticket' => '2ae6eeb0-0a75-11e7-93ae-92361f002671']
		];

		$res = uniqWith($comparator, $order['items']);

		expect($res)->toBe($expected);
	});
});
