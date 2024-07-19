<?php

//namespace is a way to organise your code so we avoid collitions if there are other elements with the same name.  
namespace App\Models;

//We import the eloquent method 
use Illuminate\Database\Eloquent\Model;

//We add extends Model to the class 
class Job extends Model{
    protected $table = 'job_listings';

    //this property represents all the variables that are allowed to be mass assigned
    protected $fillable = ['title', 'salary'];
    
}
