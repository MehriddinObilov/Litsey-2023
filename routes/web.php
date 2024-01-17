<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\ourGoalController;
use App\Http\Controllers\Admin\AboutLitseyController;
use App\Http\Controllers\Admin\LitseyNewController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\PlateController;
use App\Http\Controllers\Admin\DirectorsController;
use App\Http\Controllers\Admin\ActiveTeachersController;
use App\Http\Controllers\Admin\StructureController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CategoryController;





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

Route::get('/', [MainController::class, 'index'])->name('index');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/gallerylitsey', [MainController::class, 'gallerylitsey'])->name('gallerylitsey');
Route::get('/newslitsey', [MainController::class, 'newslitsey'])->name('newslitsey');
Route::get('/pupils', [MainController::class, 'pupils'])->name('pupils');
Route::get('/onlinebook', [MainController::class, 'onlinebook'])->name('onlinebook');
Route::get('/management', [MainController::class, 'management'])->name('management');
Route::get('/litseytuzilma', [MainController::class, 'litseytuzilma'])->name('litseytuzilma');
Route::get('/technicalstructure', [MainController::class, 'technicalstructure'])->name('technicalstructure');
Route::post('/tgContact', [MainController::class, 'tgContact'])->name('tgContact');
Route::get('/batafsil/{id}', [MainController::class, 'batafsil'])->name('batafsil');
Route::get('/goal/{id}', [MainController::class, 'goal'])->name('goal');





Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
    return view('adminpanel.dashboard');
    })->name('dashboard');

Route::resource('ourGoal', ourGoalController::class);
Route::resource('aboutLitsey', AboutLitseyController::class);
Route::resource('news', LitseyNewController::class);
Route::resource('info', InfoController::class);
Route::resource('plate', PlateController::class);
Route::resource('director', DirectorsController::class);
Route::resource('activeteacher', ActiveTeachersController::class);
Route::resource('structure', StructureController::class);
Route::resource('gallery', GalleryController::class);
Route::resource('category', CategoryController::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
