<?php

include 'cms.php';

use App\Http\Controllers\GeneralController;
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

Route::middleware('website')->group(function () {

    Route::get('/', [GeneralController::class, 'index'])->name('home');
    Route::get('/service/{slug}', [GeneralController::class, 'singleService'])->name('single-service');

});
