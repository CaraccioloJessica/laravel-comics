<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('comics');
});

Route::get('/single', function () {
  return view('single');
});