<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.index');
});
Route::get('/works', function () {
    return view('user.works');
});
Route::get('/works/project-edel', function () {
    return view('user.works.project-edel');
});
Route::get('/works/project-chat', function () {
    return view('user.works.project-chat');
});
Route::get('/works/project-classcancel', function () {
    return view('user.works.project-classcancel');
});

Route::get('/skills', function () {
    return view('user.skills');
});

Route::get('/contact', function () {
    return view('user.contact');
});

    