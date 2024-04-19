<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcular/area/{forma}', 'AreaController@calculaArea')->name('calcula.area');
