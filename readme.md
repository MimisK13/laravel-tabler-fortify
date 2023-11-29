# Laravel Tabler Fortify

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Build Status][ico-travis]][link-travis]
[![StyleCI][ico-styleci]][link-styleci]

This is where your description should go. Take a look at [contributing.md](contributing.md) to see a to do list.

## Installation

Via Composer

```bash
composer require mimisk13/laravel-tabler-fortify
```

Register `App\Providers\FortifyServiceProvider::class` to `config\app.php`

For 2FA

```php 
use Laravel\Fortify\TwoFactorAuthenticatable;

class User extends Authenticatable
{
    use TwoFactorAuthenticatable;

```

## Usage

## Change log

Please see the [changelog](changelog.md) for more information on what has changed recently.

## Testing

```bash
composer test
```

## Contributing

Please see [contributing.md](contributing.md) for details and a todolist.

## Security

If you discover any security related issues, please email author@email.com instead of using the issue tracker.

## Credits

- [Author Name][link-author]
- [All Contributors][link-contributors]

## License

MIT. Please see the [license file](license.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/mimisk13/laravel-tabler-fortify.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/mimisk13/laravel-tabler-fortify.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/mimisk13/laravel-tabler-fortify/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/12345678/shield

[link-packagist]: https://packagist.org/packages/mimisk13/laravel-tabler-fortify
[link-downloads]: https://packagist.org/packages/mimisk13/laravel-tabler-fortify
[link-travis]: https://travis-ci.org/mimisk13/laravel-tabler-fortify
[link-styleci]: https://styleci.io/repos/12345678
[link-author]: https://github.com/mimisk13
[link-contributors]: ../../contributors
