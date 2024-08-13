<?php

use App\Http\Controllers\studyMaterialController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', [studyMaterialController::class,'display']);


Route::get('/study-status/{id}', [studyMaterialController::class,'update']);

