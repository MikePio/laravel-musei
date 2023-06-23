<?php

use App\Http\Controllers\Admin\MuseumController;
use App\Http\Controllers\Admin\OperaController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\Guest\DashboardController;

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

Route::get('/',[PageController::class,'index']);


Route::middleware('auth',  'verified')
    ->name('admin.')
    ->prefix('admin')
    ->group(function(){
        Route::get('/',[DashboardController::class,  'index'])->name('dashboard');
        Route::resource('museums', MuseumController::class);
        Route::resource('operas', OperaController::class );
        Route::resource('artists', ArtistController::class );
    });

require __DIR__.'/auth.php';
