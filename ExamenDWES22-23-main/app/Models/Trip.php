<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function drivers()
    {
        return $this->hasMany('App\Models\Driver');
    }
}
