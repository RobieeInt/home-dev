<?php

use App\Models\DetailProperty;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SimulasiKprController;
use App\Http\Controllers\DetailPropertyController;
use App\Http\Controllers\SimulasiKprTableController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
})->name('landing');


// Route::get('/propertyDetail/{slug}', [DetailPropertyController::class, 'index'])->name('propertyDetail');
Route::get('detail/{slug}', [DetailPropertyController::class, 'index'])->name('propertyDetail');

Route::get('/searchproperty', [SearchController::class, 'index'])->name('search.prop');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/SimulasiKpr', [SimulasiKprController::class, 'index'])->name('simulasi.kpr');
Route::get('/SimulasiKprTable', [SimulasiKprTableController::class, 'index'])->name('simulasi.kpr.table');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
