<?php

use App\Http\Controllers\TerminalController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/terminal', [TerminalController::class, 'index'])->middleware('auth')->name('terminal');
Route::get('/terminal/admin', [TerminalController::class, 'admin'])->middleware(['auth', 'admin'])->name('terminal-admin');
Route::post('/terminal/admin/create', [TerminalController::class, 'createSubmit'])->middleware(['auth', 'admin'])->name('create-submit');
Route::get('/terminal/admin/update{id}', [TerminalController::class, 'update'])->middleware(['auth', 'admin'])->name('update');
Route::post('/terminal/admin/update{id}', [TerminalController::class, 'updateSubmit'])->middleware(['auth', 'admin'])->name('update-submit');
Route::get('/terminal/admin/delete{id}', [TerminalController::class, 'deleteSubmit'])->middleware(['auth', 'admin'])->name('delete');

//Route::get('/terminal/admin', [TerminalController::class, 'edit'])->middleware(['auth', 'admin']);
