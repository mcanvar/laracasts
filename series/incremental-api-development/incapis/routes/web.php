<?php

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

use App\Http\Controllers\LessonsContoller;
use App\Http\Controllers\TagsContoller;

Route::group(['prefix' => 'api/v1'], function (){
    Route::get('lessons/{id}/tags', 'TagsController@index');
    Route::resource('lessons', LessonsController::class);
    Route::resource('tags', TagsController::class, ['index', 'show']);
});