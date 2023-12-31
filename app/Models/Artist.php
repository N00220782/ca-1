<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    //Artists can be in many shows

    public function shows(){
        return $this->belongsToMany(Show::class, 'artist__shows');
    }
}
