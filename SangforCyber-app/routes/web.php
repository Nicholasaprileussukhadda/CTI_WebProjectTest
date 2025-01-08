<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/formsent', function (Request $request) {
    // Handle form submission logic here

    return view('formsent');
});
