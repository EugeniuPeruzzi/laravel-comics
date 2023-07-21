<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $products = config('db.comics');
    $lists = config('db-2.lists');
    return view('home', compact('products', 'lists'));
}) -> name('home');

