<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

/** Boards routes */
Route::GET('/board','App\Http\Controllers\BoardController@index')->name('board');

/** projects routes */
Route::group(['prefix' => 'projects'], function () {
    Route::GET('/create','App\Http\Controllers\ProjectController@create')->name('projects.create');
    Route::GET('/show/{project_id}','App\Http\Controllers\ProjectController@show')->name('projects.show');
    Route::GET('/{board_id}','App\Http\Controllers\ProjectController@viewProjectsAsBoard')->name('projects.index');
    Route::POST('/store','App\Http\Controllers\ProjectController@store')->name('projects.store');
});


Route::GET('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
