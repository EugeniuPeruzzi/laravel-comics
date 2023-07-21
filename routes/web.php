<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $products = config('db.comics');

    return view('home', compact('products'));
}) -> name('home');

