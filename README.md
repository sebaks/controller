[![Build Status](https://travis-ci.org/sebaks/controller.svg?branch=master)](https://travis-ci.org/sebaks/controller)
[![codecov.io](http://codecov.io/github/sebaks/controller/coverage.svg?branch=master)](http://codecov.io/github/sebaks/controller?branch=master)

#MVC controller implementation

This is an implementation of MVC controller which is suitable for most tasks.
It is next level of [sebaks/crud](https://github.com/sebaks/crud).

## Installation

Installation of sebaks/controller uses composer.

```sh
php composer.phar require sebaks/controller
```

or add to your composer.json
```json
"require": {
  "sebaks/controller": "^0.0.1"
}
```

## Quick start

Almost all controllers have similar workflow:

- Validate request
- Validate data
- Run Domain service
- Build response

That solution provide this

Go to [sebaks/zend-mvc-controller](https://github.com/sebaks/zend-mvc-controller) to see controller implementation for Zend MVC.
