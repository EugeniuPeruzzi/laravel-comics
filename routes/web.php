<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $prducts = config('db.comics');
    return view('home', compact('products'));
}) -> name('home');

