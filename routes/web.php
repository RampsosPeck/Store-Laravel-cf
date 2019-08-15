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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/carrito', 'ShoppingCartsController@index')->name('shopping_cart.show');


Route::resource('productos', 'ProductosController');

Route::resource('in_shopping_carts', 'InShoppingCartsController',[
	'only'=> ['store','destroy']
]);


//Route::get('/pagar/completar','PaymentsController@execute')->name('payments.execute');

