<?php

use App\Http\Controllers\SlugController;
use Illuminate\Support\Facades\Route;

Route::get('/generate-slug', [SlugController::class, 'generate']);
