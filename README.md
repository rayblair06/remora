# Remora

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rayblair/lara-fs.svg?style=flat-square)](https://packagist.org/packages/rayblair/lara-fs)
[![Build Status](https://img.shields.io/travis/rayblair/lara-fs/master.svg?style=flat-square)](https://travis-ci.org/rayblair/lara-fs)
[![Quality Score](https://img.shields.io/scrutinizer/g/rayblair/lara-fs.svg?style=flat-square)](https://scrutinizer-ci.com/g/rayblair/lara-fs)
[![Total Downloads](https://img.shields.io/packagist/dt/rayblair/lara-fs.svg?style=flat-square)](https://packagist.org/packages/rayblair/lara-fs)

Extend Laravel's binded services that don't have macros

## Installation

You can install the package via composer:

```bash
composer require rayblair/remora
```

## Usage

Resolve our services from our service container

```php
Storage::class => Filesystem::class
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email rayblair06@hotmail.com instead of using the issue tracker.

## Credits

-   [Ray Blair](https://github.com/rayblair)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
