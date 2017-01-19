<?php

use function fphp\Utils\reflexify;

class TestClass {
	public function __invoke() {
		echo 'test';
	}

	static public function staticTest() {
		return true;
	}
}

describe('reflexify', function () {
	it('should get reflection of callable', function () {
		$closure = reflexify('TestClass::staticTest');
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$closure = reflexify(['DateTime', 'createFromFormat']);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$invoke = new TestClass();
		$closure = reflexify($invoke);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');

		$closure = reflexify('explode');
		expect($closure)->toBeAnInstanceOf('ReflectionFunction');

		$f = function($a, $b) { return $a + $b; };
		$closure = reflexify($f);
		expect($closure)->toBeAnInstanceOf('ReflectionMethod');
	});
});
