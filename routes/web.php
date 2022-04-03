<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalFarmController;
 


Route::get('/',[AnimalFarmController::class, 'index']);
Route::get('/chapter/{chapter_number}',[AnimalFarmController::class, 'readChapter']);
Route::get('/all-chapters', [AnimalFarmController::class, 'readAllChapters']);