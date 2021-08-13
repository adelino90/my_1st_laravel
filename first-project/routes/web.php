<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ToDoController;

Route::get('/home',function(){
    return view('home');
})->name('home');
Route::get('/',function(){
    return view('home');
});

Route::get('/dashboard',[DashboardController::class,'index'])
->name('dashboard');

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware(['guest']);
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/login',[LoginController::class,'store']);

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'store']);


Route::get('/ToDo',[ToDoController::class,'index'])->name('ToDo');
Route::post('/ToDo',[ToDoController::class,'store']);
Route::get('/ToDo_Confirmed',[ToDoController::class,'confirmed'])->name('ToDo_Confirmed');
Route::post('/ToDo_Confirmation',[ToDoController::class,'confirmation'])->name('ToDo_Confirmation');
Route::get('/ToDo_List',[ToDoController::class,'todolist'])->name('ToDo_List');

Route::get('/post',[PostController::class,'index'])->name('post');
Route::post('/post',[PostController::class,'store']);
