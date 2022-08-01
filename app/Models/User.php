<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function folders(){
        return $this->hasMany('App\Folder');
    }

    public function admin(){
        return $this->belongsTo('App\Admin');
    }

    public $timestamps = false;
}
