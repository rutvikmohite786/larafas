<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Autogeneratecontoller;
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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {

    //for controllers
    Route::get('/updatecontroller', [HomeController::class, 'UpdateControllerIndex'])->name('index.update');
    Route::get('/createcontroller', [HomeController::class, 'CreateControllerIndex'])->name('index.create');
    Route::get('/deletecontroller', [HomeController::class, 'DeleteControllerIndex'])->name('delete.create');
    Route::get('/datadisplaycontroller', [HomeController::class, 'DataDisplayControllerIndex'])->name('display.controller');
    Route::post('/display/data/controller',[Autogeneratecontoller::class,'display'])->name('getShowdata.controller');
    Route::post('/update/controller', [Autogeneratecontoller::class, 'update'])->name('controller.update');
    Route::post('/create/controller', [Autogeneratecontoller::class, 'create'])->name('controller.create');
    Route::post('/delete/controller', [Autogeneratecontoller::class, 'delete'])->name('controller.delete');

    //for model
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
