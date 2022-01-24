<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('/fumetti',function() {
    return view('fumetti');
})-> name('fumetti');
