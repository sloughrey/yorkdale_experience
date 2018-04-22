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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {
	return view('welcome');
});

Route::get('/home', function(){
	return view('home');
})->name('home');

Route::get('/myaccount', function(){
	return view('myaccount');
})->name('myaccount');

Route::get('/map', function(){
	return view('map');
})->name('map');

Route::get('/exclusives',  function(){
	$exclusive_products = [];
	$exclusive_products[] = [
			'name' => 'Coach Dragonscale Handbag',
			'price' => '2299.99',
			'image_url' => URL::asset('images/coach_exclusive.jpg'),
			'qty_remaining' => 5,
			'qty_made' => 100
	];
	
	$exclusive_products[] = [
			'name' => 'Future Proof Trainers',
			'price' => '279.99',
			'image_url' => URL::asset('images/nike_exclusive.jpg'),
			'qty_remaining' => 23,
			'qty_made' => 500
	];
	
	$exclusive_products[] = [
			'name' => 'Burberry Signature Scarf',
			'price' => '529.99',
			'image_url' => URL::asset('images/burberry_exclusive.jpg'),
			'qty_remaining' => 63,
			'qty_made' => 200
	];/* 
	
	$exclusive_products[] = [
			'name' => 'Coach Dragonscale Handbag',
			'price' => '2299.99',
			'image_url' => '',
			'qty_remaining' => 5,
			'qty_made' => 100
	];
	
	$exclusive_products[] = [
			'name' => 'Coach Dragonscale Handbag',
			'price' => '2299.99',
			'image_url' => '',
			'qty_remaining' => 5,
			'qty_made' => 100
	]; */
	
	return view('exclusives', ['exclusive_products' => $exclusive_products]);
})->name('exclusives');

Route::get('/events', function(){
	$events = [];
	$events[] = [
			'name' => 'Fashion Timeplay Contest',
			'date' => 'Monday April 23, 2018',
			'start_time' => '2299.99',
			'end_time' => 5,
			'location' => 100,
			'image_url' => URL::asset('images/timeplay.png'),
	];
	
	$events[] = [
			'name' => 'Aquazzura X Holt Renfrew',
			'date' => 'Thursday April 26, 2018',
			'start_time' => '3pm',
			'end_time' => '5pm',
			'location' => 'Holt Renfrew',
			'image_url' => URL::asset('images/aquazzura.png'),
	];
	/* 
	$events[] = [
			'name' => 'Aquazzura X Holt Renfrew',
			'date' => 'Thursday April 26, 2018',
			'start_time' => '3pm',
			'end_time' => '5pm',
			'location' => 'Holt Renfrew',
			'image_url' => URL::asset('images/timeplay.jpg'),
	]; */
	return view('events', [
		'events' => $events
	]);
})->name('events');





