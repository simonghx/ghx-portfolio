<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function clients(){
        $this->belongsTo('App\Client', 'client_id', 'id');

    }
    public function technologies(){
        $this->belongsToMany('App\Technology');
    }
}
