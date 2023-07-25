<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = 'blogs';

    public function tags(){
        return $this->belongsToMany('App\Models\tag');
    }
}
