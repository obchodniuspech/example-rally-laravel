<?php

use App\Http\Controllers\TeamsController;
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

Route::get('/', [TeamsController::class, 'index'])->name('teams.index');

Route::group(['prefix' => 'teams'], static function () {
    Route::get('/delete/{id}}', [TeamsController::class, 'delete'])->name('delete');
});
