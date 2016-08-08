<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    
     public function posts()
    {
        return $this->belongsTo('App\Post');
    }
    
    public function comments_of_user
        ()
    {
        return $this->belongsTo('App\User');
    }
    
    
}
