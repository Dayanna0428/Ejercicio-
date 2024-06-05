<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccidenteController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('accidentes', AccidenteController::class);

