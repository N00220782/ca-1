<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venue;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $venue1 = New Venue;
        $venue1->name = '3 Arena';
        $venue1->address = 'Dublin';
        $venue1->capacity = '13000';
        $venue1->phone = '086 123 1234';
        $venue1->email = '3arena@venue.com';
        $venue1->timestamps;
        $venue1->save();

        $venue2 = New Venue;
        $venue2->name = 'RDS';
        $venue2->address = 'Dublin';
        $venue2->capacity = '18500';
        $venue2->phone = '086 123 1234';
        $venue2->email = 'RDS@venue.com';
        $venue2->timestamps;
        $venue2->save();

        $venue3 = New Venue;
        $venue3->name = 'The Academy';
        $venue3->address = 'Dublin';
        $venue3->capacity = '850';
        $venue3->phone = '086 123 1234';
        $venue3->email = 'theacademy@venue.com';
        $venue3->timestamps;
        $venue3->save();

        $venue4 = New Venue;
        $venue4->name = 'Vicar Street';
        $venue4->address = 'Dublin';
        $venue4->capacity = '2550';
        $venue4->phone = '086 123 1234';
        $venue4->email = 'vicars@venue.com';
        $venue4->timestamps;
        $venue4->save();

        $venue5 = New Venue;
        $venue5->name = 'The Olympia';
        $venue5->address = 'Dublin';
        $venue5->capacity = '1240';
        $venue5->phone = '086 123 1234';
        $venue5->email = 'olympia@venue.com';
        $venue5->timestamps;
        $venue5->save();
    }
}
