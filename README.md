# fphp

[![CircleCI](https://circleci.com/gh/kilbiller/fphp.svg?style=shield&circle-token=aefb7d59b512e8ea98b5e24f931f84aa40f4f083)](https://circleci.com/gh/kilbiller/fphp)
[![codecov](https://codecov.io/gh/kilbiller/fphp/branch/master/graph/badge.svg)](https://codecov.io/gh/kilbiller/fphp)

A set of auto-curried immutable data-last functions for PHP. Inspired by lodash/fp.

Requires php 7.1 (for now, might change it to 7.0 or even 5.6).

## Why use this ?

* fphp allows you to easily compose functions
* Point free programming is awesome

## Tests

To run the tests simply do ```composer run test```.
To see coverage do ```composer run test:coverage```.

## Documentation

### Function composition

* flow

### Currying

* curry
* curryN

### Functors

* filter
* map
* reduce
* flatten
* flatMap

### Extras

* first
* last
