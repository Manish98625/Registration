<?php

use App\Http\Controllers\RegistrationController;
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

Route::get('/', function () {
    return view('welcome');
});

route::get('index', [RegistrationController::class, 'index'])->name('admin.index');

route::get('add', [RegistrationController::class, 'login'])->name('admin.login');
route::post('store', [RegistrationController::class, 'store'])->name('store');

route::get('edit/{id}', [RegistrationController::class, 'edit'])->name('admin.edit');
route::post('update/{id}', [RegistrationController::class, 'edit'])->name('update');

route::get('delete/{id}', [RegistrationController::class, 'delete']);
