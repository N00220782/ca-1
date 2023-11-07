<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    //Venues can have many shows

    public function shows(){
        return hasMany(Show::class);
    }
}
