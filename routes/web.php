<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

Route::get('/', function () {
    return view('welcome');
}); //default root route 

Route::get('/test', [RoleController::class, 'index'])->name('role'); //permission test 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');  //default jetstream dashboard 


//================================== Coffeeshop Management ==================================
Route::get('/read', [RoleController::class, 'read']);

Route::get('/create', [RoleController::class, 'create']);
Route::post('/store', [RoleController::class, 'store']);

Route::get('/edit/{id}', [RoleController::class, 'edit']);
Route::post('/update/{id}', [RoleController::class, 'update']);

Route::get('/delete/{id}', [RoleController::class, 'delete']);

Route::get('/userorder',[RoleController::class,'userorder']);

Route::get('/user/{id}',[RoleController::class,'userid']);

Route::post('/search',[RoleController::class,'search']);


