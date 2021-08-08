<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ComplaintsController;
use App\Http\Controllers\ProfilesController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}', [ProfilesController::class, 'index']);
Route::patch('/profile/{user}', [ProfilesController::class, 'update']);
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit']);

Route::get('/complaints/create', [ComplaintsController::class, 'create']);
Route::post('/complaints', [ComplaintsController::class, 'store']);
Route::get('/complaints/{complaint}/edit', [ComplaintsController::class, 'edit']);
Route::get('/complaints', [ComplaintsController::class, 'show']);

Route::get('admin/index', [AdminController::class, 'index'])->name('admin.index');
Route::get('admin/edit', [AdminController::class, 'edit']);
