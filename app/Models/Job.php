<?php

//namespace is a way to organise your code so we avoid collitions if there are other elements with the same name.  
namespace App\Models;

//We import the array method
use Illuminate\Support\Arr;

//The function or method all fetches all the jobs.
//We have a class with a method called all that returns the array 
//To be explicit about the type of data we return we add : type of data
class Job {
    public static function all(): array {
        return [
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
    }

    //We create another method called find because we want this function to find something within the class. 
    //In this case, we want it to find the job with the given id.
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] = $id);

        if(! $job) {
            //helper function called abort where we can include a status code as the first argument
            abort(404);
        }

        return $job; 

    }
}
