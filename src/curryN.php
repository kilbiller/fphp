<?php
/**
 * Shamelessly stolen from functional-php. Thank you !
 */
namespace fphp;

/**
 * Return a version of the given function where the $count first arguments are curryied.
 *
 * No check is made to verify that the given argument count is either too low or too high.
 * If you give a smaller number you will have an error when calling the given function. If
 * you give a higher number, arguments will simply be ignored.
 *
 * @param int $count number of arguments you want to curry
 * @param callable $function the function you want to curry
 * @return callable a curryied version of the given function
 */
function curryN(callable $function, $count) {
	$accumulator = function (array $arguments) use ($count, $function, &$accumulator) {
        return function (...$newArguments) use ($count, $function, $arguments, $accumulator) {
            $arguments = array_merge($arguments, $newArguments);
            if ($count <= count($arguments)) {
                return call_user_func_array($function, $arguments);
            }
            return $accumulator($arguments);
        };
    };

    return $accumulator([]);
}
