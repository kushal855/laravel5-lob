Braintree for Laravel 5
==============

### Installation

In your Laravel project's composer.json file, add `kushal855/laravel5-lob` as a dependency in the require object:

```js
"kushal855/laravel5-lob": "dev-master"
```
    
You do *not* need to add any other dependencies, as `kushal855/laravel5-lob` loads in the other dependencies automatically.

Finally, do a `composer update`.

Once installed, add the ServiceProvider to your provider array within `config/app.php`:

```php
'providers' => [
	....
	/*
	 * Braintree Service Provider
	 */
    'Kushal855\Laravel\LobServiceProvider',
]
```
### Configuration

To publish a the package configuration file, run:

```shell
php artisan config:publish kushal855/laravel-lob
```


### Credits

Thanks to the [bradleyboy/laravel-braintree](https://github.com/bradleyboy/laravel-braintree) package. I used it as a base and converted it into Laravel 5.
