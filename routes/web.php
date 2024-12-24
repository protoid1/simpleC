<?php

use App\Livewire\EmployeesRegister;
use Illuminate\Support\Facades\Route;

Route::get('/', fn()=>view('welcome'));

Route::get('/canva', fn () => view('livewire.employees-login'));