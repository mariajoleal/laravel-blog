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

Route::get('article/{id}', function ($id) {
    if ($id == 1) {
        $post = [
            'title' => 'Learning laravel',
            'content' => 'Some dummy content'
        ];
    } else {
        $post = [
            'title' => 'Learning laravel Article 2',
            'content' => 'Some dummy content'
        ];
    }
    return view('blog.article', ['post' => $post]);
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
    
    Route::post('create', function (\Illuminate\Http\Request $request,
        \Illuminate\Validation\Factory $validator) {
        $validation = $validator->make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);
        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation);
        }
        return redirect()->route('admin.index')
        ->with('info', 'Article created, new Title ' . $request->input('title'));
    })->name('admin.create');
    
    Route::get('edit/{id}', function ($id) {
        if ($id == 1) {
            $data = [
                'title' => 'Learning laravel',
                'content' => 'Some dummy content'
            ];
        } else {
            $data = [
                'title' => 'Learning laravel Article 2',
                'content' => 'Some dummy content'
            ];
        }
        return view('admin.edit', ['data' => $data]);
    })->name('admin.edit');
    
    Route::post('edit', function (\Illuminate\Http\Request $request,
    \Illuminate\Validation\Factory $validator) {
    $validation = $validator->make($request->all(), [
        'title' => 'required',
        'content' => 'required'
    ]);
    if ($validation->fails()) {
        return redirect()->back()->withErrors($validation);
    }
        return redirect()->route('admin.index')
        ->with('info', 'Article edited, new Title ' . $request->input('title'));
    })->name('admin.update');
});
