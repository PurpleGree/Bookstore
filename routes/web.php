<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Genre;

Route::get('/', function () {
    $genres = Genre::all();
    return view('index', ['genres' => $genres]);
});
