<?php



Route::get('/', function () {
    return view('frontend.welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Logout Option
Route::get('logout','\App\Http\Controllers\Auth\LoginController@logout')->name('logout');


Route::get('/changePassword','HomeController@showChangePasswordForm')->name('changePasswordShow');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');


Route::get('/show/category','CategoryController@show')->name('showCategory');
Route::get('/add/category','CategoryController@add')->name('addCategory');
Route::post('store-category','CategoryController@store')->name('storeCategory');
Route::get('/category/edit/{id}','CategoryController@edit')->name('editCategory');
Route::post('/update-category','CategoryController@update')->name('updateCategory');
Route::get('delete/category/{id}','CategoryController@delete')->name('deleteCategory');



Route::get('/show/tender','ServiceController@show')->name('showTender');
Route::get('/add/tender','ServiceController@add')->name('addTender');
Route::post('store-tender','ServiceController@store')->name('storeTender');

Route::get('/check','HomeController@indexa');