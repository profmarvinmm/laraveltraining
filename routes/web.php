<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mypage', function(){
    $pagetitle = "My Favorite Tasks";
    $tasks = [
        "Go to the store, buy fresh foods",
        "Clean up my office",
        "Prepare for class",
    ];

    return view('halow', compact("tasks", "pagetitle"));
});
