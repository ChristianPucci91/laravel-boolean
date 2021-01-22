<?php

use Illuminate\Support\Facades\Route;

////// ESERCIZIO 1

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloAll', function () {
    return view('helloAll');
});

Route::get('/helloYou', function (){
   return view('helloYou',
   [

     'name' => 'Christian'

   ]);
});

Route::get('/helloYou2', function (){
   return view('helloYou',
   [

     'name' => 'Christian Pucci'

   ]);
});

/////////////// ESERCIZIO 2


Route::get('/holaTodo','MainController@holaTodo');
Route::get('/holaTu', 'MainController@holaTu');
