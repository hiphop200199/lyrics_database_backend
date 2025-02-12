<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::get("getSongs", [SongController::class,'getSongs']);
Route::get("getSong", [SongController::class,'getSong']);
