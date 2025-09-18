<?php

use App\Http\Controllers\Info;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('main')->controller(Info::class)->group(function () {

    Route::get('/',"info");

});