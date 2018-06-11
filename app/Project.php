<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'titre', 'desc'
    ];

    // public function clients(){
    //     return $this->belongsTo('App\Client', 'client_id', 'id');

    // }
    
    public function technologies(){
        return $this->belongsToMany('App\Technology', 'project_tech', 'project_id', 'technology_id' );
    }
}
