<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    public function projects(){
        $this->belongsToMany('App\Project');
    }
    
}
