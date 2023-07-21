<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $products = config('db.comics');
    $lists = config('db-2.lists');
    $objs = config('db-2.objs');
    return view('home', compact('products', 'lists', 'objs'));
}) -> name('home');

