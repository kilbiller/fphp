<?php

namespace fphp;

/**
 * Returns the result of concatenating the given arrays
 *
 * @param string|array $args arrays
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function concat(...$args) {
	if (every('is_string', $args)) {
		return implode($args);
	}

	return array_merge(...$args);
}
