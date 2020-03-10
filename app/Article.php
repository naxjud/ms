<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //fillable defines the fields you can pass to the Model
    protected $fillable =['title','excerpt','body']; 
    
    //protected guarded =['subscribed','admin']; is the reverse of fillable you say these field can't not be entered 
}
