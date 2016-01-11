# Laravel Flipbook

Use your images to view in magazine style flipping book , used Turn.js for viewing flip book.
Flipbook is an magazine interface builder for [Laravel] using Turn.js. With Flipbook you can upload your images and convert them into magazine style viewing document. 


- **Author:** Rajiv Patel




## Composer

To install Administrator as a Composer package to be used with Laravel 5, simply run:

```sh
composer require "rudrarajiv/laravel-flipbook: 5.*"
```

Once it's installed, you can register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => [
	'rudrarajiv\laravel-flipbook\FlipbookServiceProvider',
]
```

Then publish Administrator's assets with `php artisan vendor:publish`. This will add assets in  `public` , migrations in `database` and views in `resources` . This [config file](http://administrator.frozennode.com/docs/configuration) is the primary way you interact with Administrator. This command will also publish all of the assets, views, and translation files.



## Copyright and License
Flipbook was written by Rajiv Patel for the Laravel framework.
Flipbook is released under the MIT License. See the LICENSE file for details.


## Recent Changelog


### 5.0.0
- Created flipbook for Laravel 5.* 
- Can upload , edit & delete flipping books