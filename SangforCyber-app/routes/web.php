<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::post('/formsent', function (Request $request) {

    return view('formsent');
});
