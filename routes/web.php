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


Route::get('/blog/post',['as'=>'testpostblog', function() {  // For display purpose only while managing content

    return view('theme.blog.show');

}]);



//Start of group
Route::group(['middleware'=>'web'], function(){   // Home page group with all the links

    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/cars', 'CarController@index')->name('searchcar');
    Route::get('/car/{id}', 'CarController@showCar')->name('showcar');
    Route::get('/car/{id}/book', 'CarController@bookCar')->name('bookcar');
    Route::post('/car/booked',['namespace' => 'admin', 'AppoimentController@addEvent'])->name('createbooking');
    Route::get('/blog', 'HomeController@blog')->name('blog');
    Route::get('/about', 'HomeController@about')->name('aboutus');
    Route::get('/contact', 'ContactController@contactIndex')->name('contactus');
    Route::post('/contact/send', 'ContactController@storeContact')->name('contactsend');

}); // End of group


Route::group(        // Admin panel group
    ['namespace' => 'admin', 'prefix' => 'admin', 'middleware' => ['admin']],
    function() {  
        Route::get('dashboard','DashboardController@index')->name('admindashboard');
        Route::resource('cars', 'CarController');
        Route::resource('brands', 'BrandController');
        Route::resource('models', 'ModelController');
        Route::get('attachto', 'ModelController@attachToModel')->name('attachto');
        Route::resource('employees', 'EmployeesController');
        Route::get('roles', 'RoleEmployeesController@index')->name('rolesemployees');
        Route::post('role/create', 'RoleEmployeesController@store')->name('createrole');
        Route::delete('role/delete/{id}', 'RoleEmployeesController@destroy')->name('roledelete');
        Route::get('events', 'AppoimentController@index')->name('events.index');
        Route::post('events', 'AppoimentController@addEvent')->name('events.add');
        Route::resource('users', 'UserController');
        Route::resource('tickets', 'TicketChatController');
        //

    }
); // End Of Group





Auth::routes();

