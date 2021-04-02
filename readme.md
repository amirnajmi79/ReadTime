# ReadTime

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

A PHP package to show users how long it takes to read content.

## Installation

Via Composer

``` bash
$ composer require amirnajmi/readtime
```

## Quick start

### Using the class

Here is an example of the most basic usage:

```php
use AmirNajmi\ReadTime\ReadTime;

$readTime = (new ReadTime($content))->calculateMinutes();

```



#
## License

license. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/amirnajmi/readtime.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/amirnajmi/readtime.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/amirnajmi/readtime/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/amirnajmi/readtime
[link-downloads]: https://packagist.org/packages/amirnajmi/readtime
[link-travis]: https://travis-ci.org/amirnajmi/readtime
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/amirnajmi
[link-contributors]: ../../contributors
