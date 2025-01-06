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

## Testing

Run tests with PHPUnit:
```bash
vendor/bin/phpunit
```