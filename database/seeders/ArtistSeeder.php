<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artist;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artist1 = New Artist;
        $artist1->name = 'Duran Duran';
        $artist1->genre = 'pop';
        $artist1->timestamps;
        $artist1->save();

        $artist2 = New Artist;
        $artist2->name = 'Hozier';
        $artist2->genre = 'rock';
        $artist2->timestamps;
        $artist2->save();

        $artist3 = New Artist;
        $artist3->name = 'Tool';
        $artist3->genre = 'metal';
        $artist3->timestamps;
        $artist3->save();

        $artist4 = New Artist;
        $artist4->name = 'Fear Factory';
        $artist4->genre = 'metal';
        $artist4->timestamps;
        $artist4->save();

        $artist5 = New Artist;
        $artist5->name = 'Mitski';
        $artist5->genre = 'pop';
        $artist5->timestamps;
        $artist5->save();

        $artist6 = New Artist;
        $artist6->name = 'Red Hot Chilli Peppers';
        $artist6->genre = 'rock';
        $artist6->timestamps;
        $artist6->save();

        $artist7 = New Artist;
        $artist7->name = 'Dystopia';
        $artist7->genre = 'metal';
        $artist7->timestamps;
        $artist7->save();

        $artist8 = New Artist;
        $artist8->name = 'The Cure';
        $artist8->genre = 'rock';
        $artist8->timestamps;
        $artist8->save();

        $artist9 = New Artist;
        $artist9->name = 'Electric Wizard';
        $artist9->genre = 'metal';
        $artist9->timestamps;
        $artist9->save();

        $artist10 = New Artist;
        $artist10->name = 'Burzum';
        $artist10->genre = 'metal';
        $artist10->timestamps;
        $artist10->save();

        $artist11 = New Artist;
        $artist11->name = 'Aphex Twin';
        $artist11->genre = 'electronic';
        $artist11->timestamps;
        $artist11->save();

        $artist12 = New Artist;
        $artist12->name = 'Yabujin';
        $artist12->genre = 'electronic';
        $artist12->timestamps;
        $artist12->save();

        $artist13 = New Artist;
        $artist13->name = 'Machine Girl';
        $artist13->genre = 'electronic';
        $artist13->timestamps;
        $artist13->save();

        $artist14 = New Artist;
        $artist14->name = 'Alice in Chains';
        $artist14->genre = 'metal';
        $artist14->timestamps;
        $artist14->save();

        $artist15 = New Artist;
        $artist15->name = 'Deftones';
        $artist15->genre = 'metal';
        $artist15->timestamps;
        $artist15->save();

        $artist16 = New Artist;
        $artist16->name = '$uicideboy$';
        $artist16->genre = 'hip hop';
        $artist16->timestamps;
        $artist16->save();

        $artist17 = New Artist;
        $artist17->name = 'Die Antwoord';
        $artist17->genre = 'hip hop';
        $artist17->timestamps;
        $artist17->save();

        $artist18 = New Artist;
        $artist18->name = 'Mindless Self Indulgence';
        $artist18->genre = 'electronic';
        $artist18->timestamps;
        $artist18->save();

        $artist19 = New Artist;
        $artist19->name = 'Joy Division';
        $artist19->genre = 'rock';
        $artist19->timestamps;
        $artist19->save();

        $artist20 = New Artist;
        $artist20->name = 'Depeche Mode';
        $artist20->genre = 'electronic';
        $artist20->timestamps;
        $artist20->save();

        $artist21 = New Artist;
        $artist21->name = 'Dave';
        $artist21->genre = 'hip hop';
        $artist21->timestamps;
        $artist21->save();

        $artist22 = New Artist;
        $artist22->name = 'Gorillaz';
        $artist22->genre = 'electronic';
        $artist22->timestamps;
        $artist22->save();

        $artist23 = New Artist;
        $artist23->name = 'Kajagoogoo';
        $artist23->genre = 'pop';
        $artist23->timestamps;
        $artist23->save();

        $artist24 = New Artist;
        $artist24->name = 'Abba';
        $artist24->genre = 'pop';
        $artist24->timestamps;
        $artist24->save();

        $artist25 = New Artist;
        $artist25->name = 'Paramore';
        $artist25->genre = 'rock';
        $artist25->timestamps;
        $artist25->save();

        $artist26 = New Artist;
        $artist26->name = 'Weezer';
        $artist26->genre = 'rock';
        $artist26->timestamps;
        $artist26->save();
        
    }
}
