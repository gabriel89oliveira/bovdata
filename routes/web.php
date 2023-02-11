<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');




// Route::get('/empresa/{ticker}/{cd_conta}', [App\Http\Controllers\IncomeStatementController::class, 'index'])->name('income.statement');

Route::get('/empresa/income', [App\Http\Controllers\IncomeStatementController::class, 'companies'])->name('income.statement');
Route::get('/empresa/income/{cd_cvm}', [App\Http\Controllers\IncomeStatementController::class, 'calculate_quarter'])->name('income.statement.calculate');
Route::get('/empresa/income/{cd_cvm}/{cd_conta}', [App\Http\Controllers\IncomeStatementController::class, 'data'])->name('income.statement.data');

Route::get('/empresa/{cd_cvm}', [App\Http\Controllers\IncomeStatementController::class, 'index'])->name('income.statement');