<?php

use App\Http\Controllers\GoogleAuthController;
use App\Livewire\EmployeesRegister;
use App\Livewire\HomeBento;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeBento::class);

Route::get('/info', function(){
    return phpinfo();
});

// Route::get('google/login/url',[GoogleAuthController::class,'getAuthUrl']);