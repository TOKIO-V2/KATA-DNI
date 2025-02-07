<?php

use App\Http\Controllers\Api\LetterDniController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [LetterDniController::class, 'index'])->name('index');