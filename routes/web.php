<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
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
    
        //Helper Array, method first. We use this method when we want to find the first item within an array that matches some kind of criteria. 
        //The first argument is the array and the second one is a callback function that will be called for each item within the array. 
        //The method will loop over the jobs and for each item it will pass that into the function.
        //It returns a boolean 

        // **** Option 1 ****
        // \Illuminate\Support\Arr::first($jobs, function($job) use ($id)) {
        //     return $job['id'] = $id;
        // });

        // **** Option 2 ****
        //We look for the job that has the same matching id as the url
        $job = Arr::first(Job::all(), fn($job) => $job['id'] = $id);

        // dd($job);

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


