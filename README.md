# Test Package

A production-ready demo PHP package.

## Installation

You can install the package via composer:

```bash
composer require tamil/test-package
```

## Usage

```php
use Tamil\TestPackage\Greeter;

$greeter = new Greeter();

echo $greeter->greet(); // Output: Hello, World!
echo $greeter->greet('Universe'); // Output: Hello, Universe!
```

## Testing

```bash
vendor/bin/phpunit
```

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
