<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'home', function() {

    return view('theme.home');

}]);

Route::get('/cars',['as'=>'searchcar', function() {

    return view('theme.cars.index');

}]);

Route::get('/blog',['as'=>'blog', function() {

    return view('theme.blog.index');

}]);

Route::get('/blog/post',['as'=>'testpostblog', function() {

    return view('theme.blog.show');

}]);

Route::get('/about',['as'=>'aboutus', function() {

    return view('theme.faq.about');

}]);

Route::get('/contact',['as'=>'contactus', function() {

    return view('theme.faq.contact');

}]);




//Start of group
Route::group(['middleware'=>'web'], function(){




}); // End of group


Route::group(
    ['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['web']],
    function() {
        Route::get('dashboard','DashboardController@index');
        Route::resource('cars', 'CarController');
        Route::resource('brands', 'BrandController');
        //


    }
); // End Of Group





Auth::routes();

