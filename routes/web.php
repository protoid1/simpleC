<?php

use App\Http\Controllers\GoogleAuthController;
use App\Livewire\EmployeesRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>view('welcome'));

Route::get('/info', function(){
    return phpinfo();
});

// Route::get('google/login/url',[GoogleAuthController::class,'getAuthUrl']);