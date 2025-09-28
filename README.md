# This is my package filament-map-picker

[![Latest Version on Packagist](https://img.shields.io/packagist/v/itsonlyjeff/filament-map-picker.svg?style=flat-square)](https://packagist.org/packages/itsonlyjeff/filament-map-picker)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/itsonlyjeff/filament-map-picker/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/itsonlyjeff/filament-map-picker/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/itsonlyjeff/filament-map-picker/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/itsonlyjeff/filament-map-picker/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/itsonlyjeff/filament-map-picker.svg?style=flat-square)](https://packagist.org/packages/itsonlyjeff/filament-map-picker)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require itsonlyjeff/filament-map-picker
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-map-picker-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-map-picker-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-map-picker-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentMapPicker = new ItsOnlyJeff\FilamentMapPicker();
echo $filamentMapPicker->echoPhrase('Hello, ItsOnlyJeff!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [itsonlyjeff](https://github.com/itsonlyjeff)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
