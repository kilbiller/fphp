<?php

namespace fphp;

/**
 * Returns the result of concatenating the given arrays
 *
 * @param array $args arrays
 * @return array
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function concat(...$args) {
	return array_merge(...$args);
}
