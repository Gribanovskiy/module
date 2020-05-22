<?php

use Illuminate\Support\Facades\Route;
use B2B\Module\Http\Controllers\ModuleController;

Route::get('/module', sprintf('%s@index', ModuleController::class));
