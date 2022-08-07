<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Category\CategoryController;
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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/dashboar_admin', function () {
            return view('Dashboard.dashboard');
        });
        
        //auth dev
        Auth::routes();
        
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        
        Route::get('auth/google', [App\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
        Route::get('auth/google/callback', [App\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);
        

        //Categories
        Route::group(['namespace' => 'Category'], function () {
            Route::get('/category',[CategoryController::class,'index'])->name('category.index');
            Route::POST('/category/store',[CategoryController::class,'store'])->name('store.category');
        });
        
    });