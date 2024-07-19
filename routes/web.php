<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


//We are declaring a route that listens to a get request that is visiting a URL in the browser, in this case, the homepage 
//When you visit the homepage '/', the run this function. And the function returns a view called 'welcome', welcome is a file.
//View is a function with argument 'home'.  
Route::get('/', function () {
    return view('home');
});


//The first argument is the view jobs and the second argument is the array whose key is jobs and value an array.
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all() //we have a class with a method called all that returns the array
    ]); 
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id); //we have a class named Job that has a function that is going to find the job for the given id 

    //Once we find the matching id, we load a view. 
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

//To create an API
// Route::get('/about', function () {
//     return ['foo'=> 'bar'];
// }); 


