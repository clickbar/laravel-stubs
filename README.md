# Opinionated Laravel stubs

[![Latest Version on Packagist](https://img.shields.io/packagist/v/clickbar/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/clickbar/laravel-stubs)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/clickbar/laravel-stubs/run-tests?label=tests)](https://github.com/clickbar/laravel-stubs/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/clickbar/laravel-stubs.svg?style=flat-square)](https://packagist.org/packages/clickbar/laravel-stubs)

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

- none of the model attributes are guarded
- model timestamps cast to `immutable_datetime`
- use return type hints where possible
- most docblocks have been removed

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require spatie/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan spatie-stub:publish --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan spatie-stub:publish
```

## Testing

``` bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Freek Van der Herten](https://github.com/freekmurze)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
