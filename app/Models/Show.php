<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    //Shows can only be played in one venue

    public function venue(){
        return $this->belongsTo(Venue::class);
    }

    //Shows can have many artists

    public function artists(){
        return $this->belongsToMany(Artist::class, 'artist__shows');
    }
}
