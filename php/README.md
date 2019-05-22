# Bootstrap for PHP Katas

Bootstrap code for start any kata in PHP.

_Based on the fantastic work by [Luis Rovirosa - Katas PHP](https://github.com/luisrovirosa/katas-php)_

## Installation

- Download the code using GIT or with zip link.
- Install [composer](https://getcomposer.org/)
	- Locally: 
		- `curl -sS https://getcomposer.org/installer | php`
- Install the dependencies
	- `php composer.phar install`
- Execute the tests
	- `./vendor/bin/phpunit --bootstrap vendor/autoload.php tests`
	
You also can use your favourite IDE to edit source and run these tests.
