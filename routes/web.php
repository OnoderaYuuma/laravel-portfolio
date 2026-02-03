<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/works', function () {
    return view('works');
});
Route::get('/works/project-edel', function () {
    return view('works.project-edel');
});
Route::get('/works/project-chat', function () {
    return view('works.project-chat');
});
Route::get('/works/project-classcancel', function () {
    return view('works.project-classcancel');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});

    