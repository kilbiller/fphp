<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Return prop.
 *
 * @param string $key key
 * @param array $collection collection
 * @return mixed Returns array key.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function prop($key = null, $collection = null) {
	$prop = curry2(function ($key, $collection) {
		$keys = explode('.', $key);
		$result = $collection;

		foreach ($keys as $key) {
			if (isset($result[$key])) {
				$result = $result[$key];
			} else {
				return null;
			}
		}

		return $result;
	});

	return $prop(...func_get_args());
}
