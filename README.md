# fphp

[![CircleCI](https://circleci.com/gh/kilbiller/fphp.svg?style=shield&circle-token=aefb7d59b512e8ea98b5e24f931f84aa40f4f083)](https://circleci.com/gh/kilbiller/fphp)
[![codecov](https://codecov.io/gh/kilbiller/fphp/branch/master/graph/badge.svg)](https://codecov.io/gh/kilbiller/fphp)

A set of auto-curried immutable data-last functions for PHP. Inspired by lodash/fp.

Requires php >= 7.0 (for now, might change it to 5.6).

## Why use this ?

* Functions are curried and take data as their last argument so you can easily compose them.
* Enables you to do [point-free programming.](https://en.wikipedia.org/wiki/Tacit_programming)
* All functions are immutable and have similar interfaces: iteratee-first, data-last with the rest of the parameters in between.

## How to install

```composer require kilbiller/fphp```

## Tests

To run the tests simply do ```composer run test```.
To see coverage do ```composer run test:coverage```.

## Functions

- Collections
	- concat
	- filter
	- map
	- reduce
	- flatten
	- flatMap
	- every
	- none
	- find
	- zip
- Function composition
	- flow
- Currying
	- curry
	- curryN
- Extras
	- first
	- last
	- identity
