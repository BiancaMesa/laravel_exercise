<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$jobs = [
    [
        'id' => 1,
        'title' => 'Director', 
        'salary' => '$50,000'
    ], 
    [
        'id' => 2,
        'title' => 'Programmer', 
        'salary' => '$10,000'
    ],
    [
        'id' => 3,
        'title' => 'Teacher', 
        'salary' => '$40,000'
    ]
];

//We are declaring a route that listens to a get request that is visiting a URL in the browser, in this case, the homepage 
//When you visit the homepage '/', the run this function. And the function returns a view called 'welcome', welcome is a file.
//View is a function with argument 'home'.  
Route::get('/', function () {
    return view('home');
});


//The first argument is the view jobs and the second argument is the array whose key is jobs and value an array.
//We can pass a second argument that will be an array and each key will be extracted into a variable once the view is loaded. 
//When we load our view, we will have access to a jobs variable that is equal to a list of jobs which is an array
 
Route::get('/jobs', function () use($jobs) {
    return view('jobs', [
        'jobs' => $jobs]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) use($jobs){
    

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
        $job = Arr::first($jobs, fn($job) => $job['id'] = $id);

        // dd($job);

    //Once we find the matching id, we load a view. 
    return view('job', ['job' => $job]);
});

//To create an API
// Route::get('/about', function () {
//     return ['foo'=> 'bar'];
// }); 


