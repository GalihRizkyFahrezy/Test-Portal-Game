<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MainContentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

//guest

Route::get('/',[FrontEndController::class,'index']);
Route::get('/read/{id}',[FrontEndController::class,'read'])->name('read');



//admin

Route::get('/dashboard',[MainContentController::class,'index'])->middleware(['auth','verified'])->name('dashboard');

Route::get('/createmaincontent',[MainContentController::class,'create'])->middleware(['auth','verified'])->name('createmaincontent');
Route::post('/postcreatemaincontent',[MainContentController::class,'postcreate'])->middleware(['auth','verified'])->name('createmaincontent');
Route::get('/deletecreatemaincontent/{id}',[MainContentController::class,'deletemaincontent'])->middleware(['auth','verified'])->name('deletemaincontent');
Route::get('/editmaincontent/{id}',[MainContentController::class,'edit'])->middleware(['auth','verified']);
Route::post('/update/{id}',[MainContentController::class,'update'])->middleware(['auth','verified']);

Route::get('/kategori',[CategoryController::class,'index'])->middleware(['auth','verified'])->name('kategori');
Route::post('/insertkategori',[CategoryController::class,'insert'])->middleware(['auth','verified']);

Route::get('/image',[ImageController::class,'index'])->middleware(['auth','verified'])->name('image');
Route::post('/imageinsert',[ImageController::class,'insert'])->middleware(['auth','verified']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
