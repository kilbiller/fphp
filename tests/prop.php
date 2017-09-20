<?php

declare(strict_types = 1);

use function fphp\prop;

describe('prop', function () {
	it('should return the age', function () {
		$array = ['age' => 38];

		$res = prop('age', $array);

		expect($res)->toBe(38);
	});

	it('should work on nested values', function () {
		$array = [
			'user' => [
				'age' => 38,
			],
		];

		$res = prop('user.age', $array);

		expect($res)->toBe(38);
	});

	it('should return null when key doesn\'t exist', function () {
		$array = [
			'user' => [
				'age' => 38,
			],
		];

		$res = prop('user.firstname', $array);

		expect($res)->toBe(null);
	});

	it('should be curried', function () {
		$res = prop('age');
		$res = $res(['age' => 38]);

		expect($res)->toBe(38);
	});
});
