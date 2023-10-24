<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist_Show extends Model
{
    use HasFactory;

    public function artist(){
        return $this->hasOne(Artist::class);
    }

    public function show(){
        return $this->hasOne(Show::class);
    }
}
