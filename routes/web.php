<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', action: [HomeController::class, 'home'])->name('home');
Route::get('/about', action: [HomeController::class, 'about'])->name('about');
Route::get('/projects', action: [HomeController::class, 'projects'])->name('project.index');
Route::get('/contact', action: [HomeController::class, 'contact'])->name('contact');
Route::get('/quatation', action: [HomeController::class, 'quatation'])->name('quatation');
Route::get('/services', action: [HomeController::class, 'services'])->name('services.index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', action: [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
