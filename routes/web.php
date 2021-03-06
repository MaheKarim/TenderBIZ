<?php





Route::get('/', 'FrontEndController@index');


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
Route::get('/delete/tender/{id}','ServiceController@delete')->name('deleteTender');

Route::get('/check','HomeController@indexa');

Route::get('/show/team_mate','TeamController@index')->name('showTeam');
Route::get('/add/team_mate','TeamController@add')->name('addTeam');
Route::post('store-team','TeamController@store')->name('storeTeam');
Route::get('/delete/team/{id}','TeamController@delete')->name('deleteTeam');


Route::get('/tender/{id}','FrontEndController@SingleTender')->name('SingleTender');
Route::get('/test','FrontEndController@test');

Route::get('/show/review','ReviewController@show')->name('showReview');
Route::get('add/review','ReviewController@add')->name('addReview');
Route::post('store-review','ReviewController@store')->name('storereview');
Route::get('/delete/review/{id}','ReviewController@delete')->name('deletereview');


Route::post('storeBidInfo','BidInfoController@store')->name('bidinfo');
Route::post('tender-approve/{bidId}','BidInfoController@approve')->name('bidApproved');
