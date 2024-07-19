<?php

use Illuminate\Support\Facades\Route;

//We are declaring a route that listens to a get request that is visiting a URL in the browser, in this case, the homepage 
//When you visit the homepage '/', the run this function. And the function returns a view called 'welcome', welcome is a file.
//View is a function with argument 'home'. 
//We can pass a second argument that will be an array and each key will be extracted into a variable once the view is loaded. 
//When we load our view, we will have access to a jobs variable that is equal to a list of jobs which is an array 
Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello', //variable $greeting
        'name' => 'Lary Robot', //variable $name
        'jobs' => [
            [
                'title' => 'Director', 
                'salary' => '$50,000'
            ], 
            [
                'title' => 'Programmer', 
                'salary' => '$10,000'
            ],
            [
                'title' => 'Teacher', 
                'salary' => '$40,000'
            ]
        ] //each job has its own array 
    ]);
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
