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

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('article/{id}', function () {
    return view('blog.article');
})->name('blog.article');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', function () {
        return view('admin.index');
    })->name('admin.index');
    
    Route::get('create', function () {
        return view('admin.create');
    })->name('admin.create');
    
    Route::post('create', function () {
        return "It works ";
    })->name('admin.create');
    
    Route::get('edit/{id}', function () {
        return view('admin.edit');
    })->name('admin.edit');
    
    Route::post('edit', function () {
        return "Updated";
    })->name('admin.update');
});
