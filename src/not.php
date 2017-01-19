<?php

namespace fphp;

/**
 * Return true for every falsy value and false for every truthy value.
 *
 * @param mixed $value value
 * @return mixed
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function not($value) {
	return !$value;
}
