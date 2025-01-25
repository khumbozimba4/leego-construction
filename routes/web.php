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
use App\Http\Controllers\UserController;
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

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/profile', action: [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


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


    Route::get('/users/resetpassword/{id}', [UserController::class, 'resetpassword'])->name('users.resetpassword');
    Route::post('/users/resetpassword/{id}', [UserController::class, 'resetpasswordstore']);


    Route::get('/users/new', [UserController::class, 'newuser'])->name('users.new');
    Route::post('/users/new', [UserController::class, 'newuserstore']);


    Route::delete('/users/delete/{id}', [UserController::class, 'DeleteUser'])->name('deleteUser');
    Route::delete('/customers/delete/{id}', [UserController::class, 'DeleteCustomer'])->name('deleteCustomer');

    Route::get('/users/edit/{id}', [UserController::class, 'edituser'])->name('users.edit');
    Route::post('/users/edit/{id}', [UserController::class, 'edituserstore']);

    Route::get('/users/block/{id}', [UserController::class, 'blockuser'])->name('users.block');
    Route::post('/users/block/{id}', [UserController::class, 'blockuserstore']);

    Route::get('/users/activate/{id}', [UserController::class, 'activateuser'])->name('users.activate');
    Route::post('/users/activate/{id}', [UserController::class, 'activateuserstore']);

    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/view/{id}', [UserController::class, 'viewuser'])->name('users.view');
    Route::post('/search-user', [UserController::class, 'searchUser'])->name("searchUser");
});

require __DIR__ . '/auth.php';
