<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test-connect',function(\Illuminate\Support\Facades\Request $request){
    $connection = DB::connection('mongodb');
    $msg = 'MongoDb has connect';
    try {
        $connection->command(['ping'=>1]);
    } catch (\Exception $e) {
        $msg ='Mongo Db not connect';
    }

    return ['msg' => $msg];
});