<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

## Routes 

__Product Routes__
```php
Route::get('/', 'ProductController@index')->name('index_products');
Route::get('/{id}', 'ProductController@show')->name('single_product');

Route::post('/', 'ProductController@create')->name('create_product');
Route::put('/{id}', 'ProductController@update')->name('update_product');

Route::delete('/{id}', 'ProductController@delete')->name('delete_product');
```

## About 
This project is a simple RESTFul API for training the basic syntax of Laravel and its structure, as well as training the standardization of commits using the standards of [Karma Commit Messages](http://karma-runner.github.io/1.0/dev/git-commit-msg.html).

## Technologies 
This project was built with:
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)

## Installing and Running  
 1. Clone this repository ```git clone https://github.com/pferreirafabricio/laravel-restApi.git```
 2. Enter in the project's folder: ```cd laravel-restApi```
 3. Install all project's dependencies: ```$ composer install```
 4. Run the migrations: ```$ php artisan migrate```
 5. Run the seeds: ```$ php artisan db:seed```
 6. Finally run the project (using built-in server): ```$ php artisan serve```😃
 
## Contribute
 1. Fork this repository;
 2. Create a branch with your feature: ```git checkout -b my-feature```
 3. Commit your changes: ```git commit -m 'feat: My new feature'```
 4. Push your branch: ```git push origin my-feature```
 
## License
This project is under the MIT license. Take a look at the [LICENSE](LICENSE) file for more details.
