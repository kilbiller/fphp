<?php

declare(strict_types = 1);

namespace fphp;

/**
 * Compose functions from right to left. Like in maths.
 *
 * @param callable ...$functions list of function to compose
 * @return \fphp\flow
 * @author Rémy Peru <peru.remy@gmail.com>
 */
function compose(...$functions) {
	$reversed = reverse($functions);
	return flow(...$reversed);
}
