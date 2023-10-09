Link editor extension for laravel-admin
======

This is a `laravel-admin` extension that integrates link into the `laravel-admin` form.

## Installation
```bash
composer require mr4-lax/link
php artisan vendor:publish --tag=mr4-lax-link --force
```

## Usage
Use it in the form:
```php
$form->link('content');
```

## License
Licensed under The [MIT License (MIT)](https://github.com/han48/mr4-lax.link/blob/main/LICENSE).
