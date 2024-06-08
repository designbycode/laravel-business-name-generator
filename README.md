# Laravel Business Name Generator 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/designbycode/laravel-business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/laravel-business-name-generator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/designbycode/laravel-business-name-generator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/designbycode/laravel-business-name-generator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/designbycode/laravel-business-name-generator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/designbycode/laravel-business-name-generator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/designbycode/laravel-business-name-generator.svg?style=flat-square)](https://packagist.org/packages/designbycode/laravel-business-name-generator)


## Installation

You can install the package via composer:

```bash
composer require designbycode/laravel-business-name-generator
```


This is the contents of the published config file:

```php
return [
];
```

## Usage
### Basic Usage

```php
use Designbycode\LaravelBusinessNameGenerator\Facades\BusinessNameGenerator;
$businessName = BusinessNameGenerator::generate();
```

### Custom Adjectives and Nouns
You can also provide your own lists of adjectives and nouns:

```php 
$customAdjectives = ["Cool", "Amazing", "Super"];
$customNouns = ["Shop", "Hub", "Center"];

$generator = BusinessNameGenerator::generate($customAdjectives, $customNouns);
echo $businessName;  // Example output: "Super Shop"
```

### Using Specific Categories
You can generate business names based on specific categories of adjectives and nouns:

```php 
// Generate a business name using playful adjectives and color-related nouns
$businessName = BusinessNameGenerator::generate('playful', 'color');
echo $businessName;  // Example output: "Cheerful Blue"
```


## Adjective and Noun Categories
### Adjective Categories
- default: Standard business-related adjectives.
- funny: Whimsical and humorous adjectives.
- playful: Light-hearted and playful adjectives.
- color: Color-related adjectives.
- all: A combination of all the above categories.

### Noun Categories
- default: Standard business-related nouns.
- funny: Whimsical and humorous nouns.
- playful: Light-hearted and playful nouns.
- color: Color-related nouns.
- all: A combination of all the above categories.

### Extending the Lists
If you want to extend the list of adjectives or nouns, you can create your own classes that implement the HasGeneratorLists interface.

```php 
namespace YourNamespace;

use Designbycode\BusinessNameGenerator\HasGeneratorLists;

class CustomAdjectives implements HasGeneratorLists
{
    public function default(): array
    {
        return ["Energetic", "Bold", "Brilliant"];
    }

    public function funny(): array
    {
        return ["Zany", "Wacky", "Goofy"];
    }

    public function playful(): array
    {
        return ["Bouncy", "Jovial", "Perky"];
    }

    public function color(): array
    {
        return ["Crimson", "Amber", "Sapphire"];
    }
}

```

Then use your custom class with the BusinessNameGenerator:

```php
use Designbycode\BusinessNameGenerator\BusinessNameGenerator;
use YourNamespace\CustomAdjectives;
use Designbycode\BusinessNameGenerator\Nouns;

$generator = BusinessNameGenerator::generate((new CustomAdjectives())->default(), (new Nouns())->default());

$businessName = BusinessNameGenerator::generate('default', 'default');
echo $businessName;  // Example output: "Energetic Solutions"
````

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Claude Myburgh](https://github.com/claudemyburgh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
