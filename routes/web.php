<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\StationController;
use App\Http\Controllers\PersonTypeController;

Route::get('/', function () {

    //return "hola grupo";
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('buses', BusController::class)->middleware("auth");


Route::resource('person-types', PersonTypeController::class)->middleware("auth");

Route::resource('people', PersonController::class)->middleware("auth");

Route::resource('accesses', AccessController::class)->middleware("auth");

Route::resource('stations', StationController::class)->middleware("auth");
