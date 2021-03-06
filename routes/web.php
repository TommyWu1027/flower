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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'FestivalController@test')->name('test');
Route::post('/flowermeaning', 'FestivalController@flowermeaning')->name('flowermeaning');
Route::get('/hottestFlower', 'FestivalController@hottestFlower')->name('hottestFlower');
Route::get('/upcomingfestival', 'FestivalController@upcomingfestival')->name('upcomingfestival');
Route::post('/festival2flower', 'FestivalController@festival2flower')->name('festival2flower');
Route::post('/flowerspecies', 'FestivalController@flowerspecies')->name('flowerspecies');
Route::post('/flowerArgPrice', 'FestivalController@flowerArgPrice')->name('flowerArgPrice');
Route::get('/getImage', 'FestivalController@getImage')->name('getImage');
Route::get('/getImage2', 'FestivalController@getImage2')->name('getImage2');
//======================================================================

// // store
// Route::get('/addstore', 'StoreController@addstore')->name('addstore');
// Route::post('/storePost', 'StoreController@storePost')->name('storePost');
// Route::get('/storeinfo', "StoreController@index");
// //// add dish
// Route::post('/dishPost_add', 'StoreController@dishPost_add')->name('dishPost_add');
// Route::get('/dish_add', ['middleware' => 'auth', 'uses' => 'StoreController@dish_add'])-> name('dish_add');
// //// update dish
// Route::post('/dishPost_update', 'StoreController@dishPost_update')->name('dishPost_update');
// Route::get('/dish_update', ['middleware' => 'auth', 'uses' => 'StoreController@dish_update'])-> name('dish_update');
// //// delete dish
// Route::post('/dishPost_delete', 'StoreController@dishPost_delete')->name('dishPost_delete');
// Route::get('/dish_delete', ['middleware' => 'auth', 'uses' => 'StoreController@dish_delete'])-> name('dish_delete');
// //// order menu
// Route::get('/menu/{storeid}', "StoreController@menu");

//======================================================================

// deliver
// Route::get('/adddeliver', 'DeliverController@add_deliver')->name('adddeliver');
// Route::post('/deliverPost', 'DeliverController@deliverPost')->name('deliverPost');


//======================================================================


// customer
// Route::get('/addcustomer', 'CustomerController@add_customer')->name('addcustomer');
// Route::post('/customerPost', 'CustomerController@customerPost')->name('customerPost');


//======================================================================

//order
// Route::post('/', 'CustomerController@')->name('');