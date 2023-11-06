<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist_Show extends Model
{
    use HasFactory;

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function show(){
        return $this->belongsTo(Show::class);
    }
}
