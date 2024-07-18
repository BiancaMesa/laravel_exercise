<?php

use Illuminate\Support\Facades\Route;

//We are declaring a route that listens to a get request that is visiting a URL in the browser, in this case, the homepage 
//When you visit the homepage '/', the run this function. And the function returns a view called 'welcome', welcome is a file.
Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

//To create an API
// Route::get('/about', function () {
//     return ['foo'=> 'bar'];
// });
