# fudu-laravel-contact-form
Contact form package from FuduGo.com

## Installing

Install via composer:

```
composer require fudugo/contactform
```

Add the following provider in your `config/app.php`:

```php
FuduGo\Contactform\ContactFormServiceProvider::class,
```

Publish the config file `config/votable.php`:

```
php artisan vendor:publish --provider="JrMiranda\Votable\VotableServiceProvider"
```

Run the migrations:

```
php artisan migrate
```

## Usage


## References


## License

MIT
