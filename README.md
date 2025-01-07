# German License Plate Validator for Laravel

A Laravel package to validate German license plate numbers.

## Installation

Install via Composer:
```bash
composer require ikromjon1998/german-license-validator
```

## Usage

Use the custom validation rule in your Laravel validators:

```php
$request->validate([
    'license_plate' => 'required|german_license_plate',
]);
```

## Configuration

You can publish the configuration file to customize the regex or error messages:

```bash
php artisan vendor:publish --tag=config
```

The configuration file will be published to `config/license-plate.php`.

## Testing

Run tests with PHPUnit:
```bash
vendor/bin/phpunit
```