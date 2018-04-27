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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('cats/{id}', function ($id) {
    return 'Cat ' . $id;
});

Route::get('cats/{id}/{name}', function ($id, $name) {
    return 'Cat ' . $id . ' name is: ' . $name ;
});

Route::get('/', function() {
   return redirect('cats');
});

Route::get('cats', function() {
   return 'All cats';
});

Route::get('about', function() {
   $number_of_cats = 9000;
   return view('about', compact('number_of_cats'));
});
