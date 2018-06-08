<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function projects(){
        $this->hasMany('App\Project', 'client_id', 'id');

    }
}
