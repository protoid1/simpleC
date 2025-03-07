<?php

use App\Http\Controllers\GoogleAuthController;
use App\Livewire\Counter;
use App\Livewire\EmployeesRegister;
use App\Livewire\HomeBento;
use App\Livewire\PreOrders;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeBento::class);

Route::get('/info', function(){
    return phpinfo();
});
Route::get('/create',PreOrders::class);


// Route::get('google/login/url',[GoogleAuthController::class,'getAuthUrl']);