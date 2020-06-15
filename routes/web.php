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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/pizzas', function () {

    // return view ('pizza);
    // return 'pizza!'; 
    // get data from a database
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];
    return view('pizzas', ['pizzas' => $pizzas]);
}); */

Route::get('/', function () {
    return view('welcome');
});

// pizza routes
Route::get('/pizzas', 'RestaurantController@index');
Route::get('/pizzas/create', 'restaurantController@create');
Route::post('/pizzas', 'RestaurantController@store');
Route::get('/pizzas/{id}', 'RestaurantController@show');
