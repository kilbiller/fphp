<?php

namespace fphp;

/**
 * Get last element of an array
 *
 * @param array $array array
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function last(array $array) {
	return array_values(array_slice($array, -1))[0];
}
