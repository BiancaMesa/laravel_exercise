<?php

//namespace is a way to organise your code so we avoid collitions if there are other elements with the same name.  
namespace App\Models;

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
}
