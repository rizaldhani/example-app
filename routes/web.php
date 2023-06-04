<?php

use App\Http\Controllers\MakananController;
use Illuminate\Support\Facades\Route;



Route::get('/', [MakananController::class, 'tampil']);