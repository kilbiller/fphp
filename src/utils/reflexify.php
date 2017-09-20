<?php

declare(strict_types = 1);

namespace fphp\utils;

use ReflectionFunction;
use ReflectionMethod;

function reflexify(callable $f) {
	if (is_string($f) && strpos($f, '::', 1) !== false) {
		$reflection = new ReflectionMethod($f);
	} elseif (is_array($f) && count($f) === 2) {
		$reflection = new ReflectionMethod($f[0], $f[1]);
	} elseif (is_object($f) && method_exists($f, '__invoke')) {
		$reflection = new ReflectionMethod($f, '__invoke');
	} else {
		$reflection = new ReflectionFunction($f);
	}

	return $reflection;
}
