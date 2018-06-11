<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Technology extends Model
{
    use SoftDeletes;
    
    public function projects(){
        return $this->belongsToMany('App\Project', 'project_tech', 'technology_id',  'project_id');
    }
    
}
