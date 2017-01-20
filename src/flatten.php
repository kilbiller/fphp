<?php

namespace fphp;

/**
 * Flatten an array one level deep
 *
 * @param array $array array
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function flatten(...$args) {
	$flatten = function($array) {
		$flattened = [];

		foreach($array as $elem) {
			if (is_array($elem)) {
				foreach ($elem as $elem2) {
					$flattened[] = $elem2;
				}
			} else {
				$flattened[] = $elem;
			}
		}

		return $flattened;
	};

	return curryN($flatten, 1)(...$args);
}
