# Laravel Flipbook

Use your images to view in magazine style flipping book , used Turn.js for viewing flip book.
Flipbook is an magazine interface builder for [Laravel] using Turn.js. With Flipbook you can upload your images and convert them into magazine style viewing document. 


- **Author:** Rajiv Patel




## Composer

To install Administrator as a Composer package to be used with Laravel 5, simply run:

```sh
composer require "rudrarajiv/flipbooklaravel:dev-master"
```

Once it's installed, you can register the service provider in `app/config/app.php` in the `providers` array:

```php
'providers' => [
	'rudrarajiv\flipbook-laravel\FlipBookServiceProvider',
]
```

Then publish Flipbook's assets with `php artisan vendor:publish`. This will add assets in  `public` , migrations in `database` and views in `resources` .
To publish assets , migration and view individually , please use the tags `flippublic`,`flipmigration`,`flipviews` respectively. 
for eg.  `php artisan vendor:publish --provider="rudrarajiv\flipbooklaravel\FlipBookServiceProvider" --tag="flippublic"`


Once you have published the migration - please don't forget to migrate the migration into your database - For migration please use  `php artisan migrate`
After migration is completed - you can find a table named 'flipbook' into your database.

By Default the routes file which is included with this package has route defined as following

````
Route::resource('/flipbook','rudrarajiv\flipbooklaravel\FlipBookController');
````
Feel free to edit the '/flipbook' portion of the route as per your requirement, if you edit this URL - also edit the same into the views that are included with this package.

There are four views included with this package, which you can edit as per your requirement, also please update the  url into views - if you change the route resource to something else  then '/flipbook'.
``````
bookindex.blade.php - (This view shows all the books that are stored in the database)
bookcreater.blade.php - (This view lets you to create a new book, new book created will get stored into database and images will get stored into public/rudra/fbook/pics path )
editbook.blade.php - (This view lets you to edit your previous book and also there is a button to delete your book)
showbook.blade.php - (This view lets you to view your book into magazine style)
`````


## Copyright and License
Flipbook was written by Rajiv Patel for the Laravel framework.
Flipbook is released under the MIT License. See the LICENSE file for details.


## Recent Changelog


### 5.0.0
- Created flipbook for Laravel 5.* 
- Can upload , edit & delete flipping books