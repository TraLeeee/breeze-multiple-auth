<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('logout', [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'adminDestroy'])
    ->name('admin.logout');
Route::group(['middleware' => ['auth:admin']], function () {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});
