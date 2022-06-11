<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function(){
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/redirects', [HomeController::class, 'redirects']);

Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
Route::get('/foodmenu', [AdminController::class, 'foodmenu'])->name('foodmenu');
Route::get('/food/delete/{id}', [AdminController::class, 'deleteMenu']);
Route::get('/food/update/{id}', [AdminController::class, 'updateMenu']);
Route::post('/food/updated/{id}', [AdminController::class, 'updateSubmitMenu'])->name('food.update');
Route::post('/foodmenu/upload', [AdminController::class, 'upload'])->name('food.create');
Route::get('/delete/{id}', [AdminController::class, 'delete']);
Route::post('/reservation', [AdminController::class, 'reservation'])->name('reservation');
Route::get('/viewReservation', [AdminController::class, 'viewReservation'])->name('CheckReservation');
Route::get('/viewChefs', [AdminController::class, 'viewChefs'])->name('viewChefs');
Route::post('/uploadChef', [AdminController::class, 'addchefs'])->name('addchefs');

 
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
