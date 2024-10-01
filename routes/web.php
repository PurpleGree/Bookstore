<?php

use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;
use \App\Models\Genre;

Route::get('/', function () {
    $genres = GenreController::getGenres() ;
    return view('index', ['genres' => $genres]);
});

Route::get('/genre/{genre:genreName}',[GenreController::class,'show']);



