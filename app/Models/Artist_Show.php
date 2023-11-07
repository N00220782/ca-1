
<!--Model I made for the many to many relationship between artists and shows
(artists can do many shows, and shows can have many artists). It turns out
it was not necessary for the relationship to work.-->

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
