<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('comics-cards');
});

Route::get('/', function () {
  return view('single-comics');
});