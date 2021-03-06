<?php

declare(strict_types = 1);

use function fphp\utils\reflexify;

class TestClass {

	public function __invoke() {
		return true;
	}

	public static function staticTest() {
		return true;
	}

}

describe('reflexify', function () {
	it('should get reflection of callable', function () {
		$closure = reflexify('TestClass::staticTest');
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$closure = reflexify(['TestClass', 'staticTest']);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$test = new TestClass();
		$closure = reflexify($test);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$closure = reflexify('explode');
		expect($closure)->toBeAnInstanceOf('ReflectionFunction');

		$f = function ($a, $b) {
			return $a + $b;
		};
		$closure = reflexify($f);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');
	});
});
