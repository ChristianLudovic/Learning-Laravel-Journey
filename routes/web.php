<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/blog')->controller(BlogController::class) ->group(function(){
    Route::get('/', 'index');

    Route::get('/new', 'create');

    Route::post('/new', 'store');
    
    Route::get('/{slug}-{id}', 'showArticle')->where([
        'slug' => '[a-z0-9\-]+',
        'id' => '[0-9]+'
    ])->name('show');
});
