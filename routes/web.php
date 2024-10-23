<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("tasks/index");
});

Route::get('/index2', function () {
    return view('tasks/index2');
});

