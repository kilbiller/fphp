# fphp

[![CircleCI](https://circleci.com/gh/kilbiller/fphp.svg?style=shield&circle-token=aefb7d59b512e8ea98b5e24f931f84aa40f4f083)](https://circleci.com/gh/kilbiller/fphp)
[![codecov](https://codecov.io/gh/kilbiller/fphp/branch/master/graph/badge.svg)](https://codecov.io/gh/kilbiller/fphp)

A set of auto-curried immutable data-last functions for PHP. Inspired by lodash/fp.

Requires php >= 7.0

## Why use this ?

* Functions are curried and take data as their last argument so you can easily compose them.
* Enables you to do [point-free programming.](https://en.wikipedia.org/wiki/Tacit_programming)
* All functions are immutable and have similar interfaces: iteratee-first, data-last with the rest of the parameters in between.

## How to install

```composer require kilbiller/fphp```

## Pro tips

* Functions with an arity of one are also curried so you can avoid using a callable to compose them:

	```flow(flatten())([1, [2, 3]]) ==> [1, 2, 3]```

## Tests

To run the tests simply do ```composer run test```.
You can also check code coverage by running ```composer run test:coverage```.

## Functions

- Collections
	- join
	- filter
	- reject
	- map
	- reduce
	- flatten
	- flatMap
	- every
	- none
	- find
	- zip
	- reverse
	- some
	- first
	- last
	- uniq
	- uniqWith
	- prop
- Function composition
	- flow
	- compose
- Currying
	- curry
	- curryN
- Logic
	- not
- Functions
	- negate
	- flip
- Extras
	- identity
	- concat
