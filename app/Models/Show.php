<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    public function venue(){
        return $this->hasOne(Venue::class);
    }

    public function artists(){
        return hasMany(Artist::class);
    }
}
