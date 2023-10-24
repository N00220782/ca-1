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
        $venue1->save();
    }
}
