# Google Cloud Storage

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![GitHub Workflow Status][ico-github]][link-github]
[![Coverage Status][ico-codecov]][link-codecov]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Google Cloud Storage for Laravel using Flysystem.

## Install

Via Composer

``` bash
$ composer require talboterie/google-cloud-storage
```

Add a new disks configuration to `config/filesystems.php`

```php
    'disks' => [
        'gcp-storage' => [
            'driver' => 'gcp-storage',
            'prefix' => env('GCP_STORAGE_PREFIX'),
            'bucket' => env('GCP_STORAGE_BUCKET'),
            'keyFile' => env('GCP_STORAGE_KEY_FILE'), // Content of the .json file containing the credentials.
            'keyFilePath' => env('GCP_STORAGE_KEY_FILE_PATH'), // Path to the .json containing the credentials.
        ],
    ],
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email `vincent@talbot.ninja` instead of using the issue tracker.

## Credits

- [Vincent Talbot][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/talboterie/google-cloud-storage.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-github]: https://img.shields.io/github/workflow/status/talboterie/google-cloud-storage/run-tests.svg?style=flat-square
[ico-codecov]: https://img.shields.io/codecov/c/gh/talboterie/google-cloud-storage.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/talboterie/google-cloud-storage.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/talboterie/google-cloud-storage.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/talboterie/google-cloud-storage
[link-github]: https://travis-ci.org/talboterie/google-cloud-storage
[link-codecov]: https://codecov.io/gh/talboterie/google-cloud-storage
[link-code-quality]: https://scrutinizer-ci.com/g/talboterie/google-cloud-storage
[link-downloads]: https://packagist.org/packages/talboterie/google-cloud-storage
[link-author]: https://github.com/vtalbot
[link-contributors]: ../../contributors
