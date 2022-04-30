<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])->name('report.listing');
Route::get('/{report}', [HomeController::class, 'show'])->name('report.show');
Route::get('/create', [HomeController::class, 'create'])->name('report.create');
Route::post('/store', [HomeController::class, 'store'])->name('report.store');
Route::get('/edit/{report}', [HomeController::class, 'edit'])->name('report.edit');
Route::put('/update/{report}', [HomeController::class, 'update'])->name('report.update');
Route::delete('/destroy/{report}', [HomeController::class, 'destroy'])->name('report.destroy');


//Auth::routes([
//    'register' => false
//]);
