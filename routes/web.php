<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/',                 [HomeController::class, 'home']);

//Route::get('/post',           [PostController::class, 'index']);

Route::get('post/ler',          [PostController::class, 'read']);

Route::get('post/tudo',         [PostController::class, 'all']);

Route::get('/post/novo',        [PostController::class, 'create']);

Route::get('/post/atualizar',   [PostController::class, 'update']);

Route::get('/post/excluir',     [PostController::class, 'delete']);
