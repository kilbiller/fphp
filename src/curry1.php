<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Curry a function
 *
 * @param callable $f function
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function curry1(callable $f) {
	return curryN($f, 1);
}
