<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get("getSongs", [SongController::class,'getSongs']);
