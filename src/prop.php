<?php

namespace fphp;

/**
 * Return prop.
 *
 * @param string $key key
 * @param array $collection collection
 * @return mixed Returns array key.
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function prop(...$args) {
	$prop = function ($key, $collection) {
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
	};

	return curryN($prop, 2)(...$args);
}
