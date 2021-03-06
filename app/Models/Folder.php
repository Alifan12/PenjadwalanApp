<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo('App/User');
    }

    public function file(){
        return $this->hasMany('App/File');
    }
}
