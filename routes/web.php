<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resource;
use App\Http\Controllers\RoomController;


Route::resource('resources', Resource::class);

Route::get('/', function () {
    return view('home');
});

Route::get('/activity' , [Resource::class , 'index']);
Route::get('/activity/create' , [Resource::class , 'create']);
Route::post('/activity', [Resource::class, 'store']);
Route::delete('/activity/{id}', [Resource::class, 'destroy']);

Route::get('/rooms' , [RoomController::class, 'index']);
Route::get('/rooms/{id}' , [RoomController::class , 'show']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
