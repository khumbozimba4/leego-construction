<?php

use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuotationController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
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
    Route::get('/admin/profile', action: [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/admin/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/admin/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // for projects

    Route::get('/projects/search/', [ProjectController::class, 'searchProject'])->name('searchProject');
    Route::resource('projects', ProjectController::class);


    // for message
    Route::resource('messages', MessageController::class);

    // Routes for Quotations
    Route::resource('quotations', QuotationController::class);

    // Routes for Teams
    Route::resource('teams', TeamController::class);

    // for slides
    Route::resource('sliders', SliderController::class);

    // for equipments
    Route::resource('equipments', EquipmentController::class);

    // for settings
    Route::resource('settings', SettingController::class);
});

require __DIR__ . '/auth.php';
