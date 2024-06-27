<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});



Route::prefix('/blog')->group(function(){
    Route::get('/', [BlogController::class, 'index']);
    
    Route::get('/{slug}-{id}', [\App\Htpp\Controllers\BlogController::class, 'showArticle'])->where([
        'slug' => '[a-z0-9\-]+',
        'id' => '[0-9]+'
    ]);
});
