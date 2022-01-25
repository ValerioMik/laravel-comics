<?php

use Illuminate\Support\Facades\Route;


Route::get('/','Homecontrolle@home')-> name('home');


Route::get('/fumetti','Homecontrolle@fumetti')-> name('fumetti');
