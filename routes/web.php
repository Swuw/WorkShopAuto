<?php

declare(strict_types=1);

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

//Route::get('/', function () {
//    return view('welcome');
//});


//Route::group(['middleware' => ['auth']], function() {
Route::middleware('auth')->group( function() {

    Route::get('/cabinet', [App\Http\Controllers\Cabinet\CabinetController::class, 'index'])
        ->name('cabinet');

});

Auth::routes();
Route::get('/', [App\Http\Controllers\Home\MainController::class, 'index'])
    ->name('home');
