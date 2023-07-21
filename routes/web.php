<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $products = config('db.comics');
    $lists = config('db.comics');

    return view('home', compact('products', 'lists'));
}) -> name('home');

