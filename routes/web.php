<?php

//use App\Http\Controllers\ProfileController;

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
*/

route::view('/','welcome1')->name('home');
route::view('contacto','contacto')->name('contact');
route::get('blog',[PostController::class,'index'])->name('posts.index');
route::get('/blog/{post}',[PostController::class,'show'])->name('posts.show');
route::view('nosotros','about')->name('about');

