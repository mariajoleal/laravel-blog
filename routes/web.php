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

Route::get('/', [
    'uses' => 'PostController@getIndex',
    'as' => 'blog.index'
]);

Route::get('article/{id}', [
    'uses' => 'PostController@getPost',
    'as' => 'blog.article'
]);

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
    Route::get('', [
        'uses' => 'PostController@getAdminIndex',
        'as' => 'admin.index'
    ]);
    
    Route::get('create', [
        'uses' => 'PostController@getAdminCreate',
        'as' => 'admin.create'
    ]);
    
    Route::post('create', [
        'uses' => 'PostController@postAdminCreate',
        'as' => 'admin.create'
    ]);
    
    Route::get('edit/{id}', [
        'uses' => 'PostController@getAdminEdit',
        'as' => 'admin.edit'
    ]);
    
    Route::post('edit', [
        'uses' => 'PostController@postAdminUpdate',
        'as' => 'admin.update'
    ]);

    Route::get('delete/{id}', [
        'uses' => 'PostController@adminDelete',
        'as' => 'admin.delete'
    ]);

    Route::get('categories', [
        'uses' => 'CategoryController@getCategories',
        'as' => 'admin.categories'
    ]);

    Route::get('create-category', [
        'uses' => 'CategoryController@getCreateCategory',
        'as' => 'admin.createCategory'
    ]);
    
    Route::post('create-category', [
        'uses' => 'CategoryController@postCreateCategory',
        'as' => 'admin.createCategory'
    ]);

    Route::get('edit-category/{id}', [
        'uses' => 'CategoryController@getEditCategory',
        'as' => 'admin.editCategory'
    ]);
    
    Route::post('edit-category', [
        'uses' => 'CategoryController@postUpdateCategory',
        'as' => 'admin.updateCategory'
    ]);

    Route::get('delete-category/{id}', [
        'uses' => 'PostController@deleteCategory',
        'as' => 'admin.deleteCategory'
    ]);
});
