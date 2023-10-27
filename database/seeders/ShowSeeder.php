<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Show;

class ShowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $show1 = New Show;
        $show1->name = 'Depeche Mode/Duran Duran/The Cure';
        $show1->date = '14/03/2024';
        $show1->start_time = '18:00';
        $show1->end_time = '00:00';
        $show1->ticket_price = '150.00';
        $show1->description = 'Experience an unforgettable night of iconic hits as Depeche Mode, The Cure, and Duran Duran unite on stage for a legendary concert event that will transport you through the best of 80s and 90s music.';
        $show1->venue_id = 1;
        $show1->timestamps;
        $show1->save();

        $show2 = New Show;
        $show2->name = 'Depeche Mode/Duran Duran/The Cure';
        $show2->date = '15/03/2024';
        $show2->start_time = '18:00';
        $show2->end_time = '00:00';
        $show2->ticket_price = '150.00';
        $show2->description = 'Experience an unforgettable night of iconic hits as Depeche Mode, The Cure, and Duran Duran unite on stage for a legendary concert event that will transport you through the best of 80s and 90s music.';
        $show2->venue_id = 1;
        $show2->timestamps;
        $show2->save();

        $show3 = New Show;
        $show3->name = 'Hozier';
        $show3->date = '23/05/2024';
        $show3->start_time = '20:00';
        $show3->end_time = '22:00';
        $show3->ticket_price = '50.00';
        $show3->description = 'Do not miss the soulful sounds and captivating performance of Hozier in an intimate concert experience that will leave you enchanted.';
        $show3->venue_id = 5;
        $show3->timestamps;
        $show3->save();

        $show4 = New Show;
        $show4->name = 'Tool: Lateralus Tour';
        $show4->date = '30/05/2024';
        $show4->start_time = '18:00';
        $show4->end_time = '00:00';
        $show4->ticket_price = '200.00';
        $show4->description = 'Rock out to the powerful and mesmerizing Tool on their Lateralus Tour.';
        $show4->venue_id = 1;
        $show4->timestamps;
        $show4->save();

        $show5 = New Show;
        $show5->name = 'Tool: Lateralus Tour';
        $show5->date = '31/05/2024';
        $show5->start_time = '18:00';
        $show5->end_time = '00:00';
        $show5->ticket_price = '200.00';
        $show5->description = 'Rock out to the powerful and mesmerizing Tool on their Lateralus Tour.';
        $show5->venue_id = 1;
        $show5->timestamps;
        $show5->save();

        $show6 = New Show;
        $show6->name = 'Fear Factory';
        $show6->date = '01/06/2024';
        $show6->start_time = '18:00';
        $show6->end_time = '21:00';
        $show6->ticket_price = '40.00';
        $show6->description = 'Join the metal mayhem with Fear Factory on their crushing tour.';
        $show6->venue_id = 4;
        $show6->timestamps;
        $show6->save();

        $show7 = New Show;
        $show7->name = 'Mitski: Breakdown Tour';
        $show7->date = '02/06/2024';
        $show7->start_time = '20:00';
        $show7->end_time = '22:00';
        $show7->ticket_price = '60.00';
        $show7->description = 'Experience the emotional journey of Mitski on her Breakdown Tour.';
        $show7->venue_id = 5;
        $show7->timestamps;
        $show7->save();

        $show8 = New Show;
        $show8->name = 'Alice in Chains/Red Hot Chilli Peppers';
        $show8->date = '04/06/2024';
        $show8->start_time = '18:00';
        $show8->end_time = '00:00';
        $show8->ticket_price = '200.00';
        $show8->description = 'Witness the legendary rock of Alice in Chains and the fiery funk of Red Hot Chili Peppers in an unforgettable night of music.';
        $show8->venue_id = 2;
        $show8->timestamps;
        $show8->save();

        $show9 = New Show;
        $show9->name = 'Dystopia';
        $show9->date = '20/06/2024';
        $show9->start_time = '20:00';
        $show9->end_time = '22:00';
        $show9->ticket_price = '50.00';
        $show9->description = 'Immerse yourself in the dark and dystopian world of the band Dystopia for an intense and unforgettable musical experience.';
        $show9->venue_id = 3;
        $show9->timestamps;
        $show9->save();

        $show10 = New Show;
        $show10->name = 'Electric Wizard/Burzum';
        $show10->date = '26/06/2024';
        $show10->start_time = '18:00';
        $show10->end_time = '00:00';
        $show10->ticket_price = '100.00';
        $show10->description = 'Prepare for a night of intense heavy metal as Electric Wizard and Burzum take the stage in a sonic onslaught of darkness and power.';
        $show10->venue_id = 4;
        $show10->timestamps;
        $show10->save();

        $show11 = New Show;
        $show11->name = 'Electric Wizard/Burzum';
        $show11->date = '26/06/2024';
        $show11->start_time = '18:00';
        $show11->end_time = '00:00';
        $show11->ticket_price = '100.00';
        $show11->description = 'Prepare for a night of intense heavy metal as Electric Wizard and Burzum take the stage in a sonic onslaught of darkness and power.';
        $show11->venue_id = 4;
        $show11->timestamps;
        $show11->save();

        $show12 = New Show;
        $show12->name = 'AFX Twin: Richard D James';
        $show12->date = '30/06/2024';
        $show12->start_time = '20:00';
        $show12->end_time = '22:00';
        $show12->ticket_price = '50.00';
        $show12->description = 'Experience the electronic wizardry of Aphex Twin in a mind-bending audio-visual journey like no other.';
        $show12->venue_id = 3;
        $show12->timestamps;
        $show12->save();

        $show13 = New Show;
        $show13->name = 'Yabujin X Machine Girl';
        $show13->date = '01/07/2024';
        $show13->start_time = '18:00';
        $show13->end_time = '00:00';
        $show13->ticket_price = '60.00';
        $show13->description = 'Get ready to be blown away by the electrifying sounds of Yabujin and Machine Girl, as they push the boundaries of music in an unforgettable performance.';
        $show13->venue_id = 5;
        $show13->timestamps;
        $show13->save();

        $show14 = New Show;
        $show14->name = 'Deftones';
        $show14->date = '02/07/2024';
        $show14->start_time = '18:00';
        $show14->end_time = '22:00';
        $show14->ticket_price = '90.00';
        $show14->description = 'Enter the sonic realm of Deftones, where their unique blend of heavy and atmospheric music will take you on a mesmerizing journey.';
        $show14->venue_id = 2;
        $show14->timestamps;
        $show14->save();

        $show15 = New Show;
        $show15->name = 'Die Antwoord X $uicideboy$';
        $show15->date = '10/07/2024';
        $show15->start_time = '18:00';
        $show15->end_time = '00:00';
        $show15->ticket_price = '120.00';
        $show15->description = 'Experience the explosive energy of Die Antwoord and Suicideboys as they bring their distinctive rap and electronic beats to the stage in a wild and unforgettable performance.';
        $show15->venue_id = 2;
        $show15->timestamps;
        $show15->save();

        $show16 = New Show;
        $show16->name = 'Mindless Self Indulgence';
        $show16->date = '14/07/2024';
        $show16->start_time = '18:00';
        $show16->end_time = '22:00';
        $show16->ticket_price = '80.00';
        $show16->description = 'Prepare for a wild ride with the unruly sound of Mindless Self Indulgence, as they unleash their signature blend of punk, industrial, and electronic music in an explosive live show.';
        $show16->venue_id = 5;
        $show16->timestamps;
        $show16->save();

        $show17 = New Show;
        $show17->name = 'Joy Division';
        $show17->date = '20/07/2024';
        $show17->start_time = '20:00';
        $show17->end_time = '00:00';
        $show17->ticket_price = '100.00';
        $show17->description = 'Step into the haunting and atmospheric world of Joy Division as they transport you back in time with their timeless post-punk classics.';
        $show17->venue_id = 2;
        $show17->timestamps;
        $show17->save();

        $show18 = New Show;
        $show18->name = 'Joy Division';
        $show18->date = '21/07/2024';
        $show18->start_time = '20:00';
        $show18->end_time = '00:00';
        $show18->ticket_price = '100.00';
        $show18->description = 'Step into the haunting and atmospheric world of Joy Division as they transport you back in time with their timeless post-punk classics.';
        $show18->venue_id = 2;
        $show18->timestamps;
        $show18->save();

        $show19 = New Show;
        $show19->name = 'Dave';
        $show19->date = '25/07/2024';
        $show19->start_time = '18:00';
        $show19->end_time = '22:00';
        $show19->ticket_price = '100.00';
        $show19->description = 'Be part of a musical celebration with Dave as he delivers a dynamic and unforgettable performance.';
        $show19->venue_id = 1;
        $show19->timestamps;
        $show19->save();

        $show20 = New Show;
        $show20->name = 'Gorillaz/Paramore/Weezer';
        $show20->date = '29/07/2024';
        $show20->start_time = '18:00';
        $show20->end_time = '00:00';
        $show20->ticket_price = '200.00';
        $show20->description = 'Get ready for an epic night of music with Gorillaz, Paramore, and Weezer, as they come together for a genre-blending concert experience that cannot be missed.';
        $show20->venue_id = 1;
        $show20->timestamps;
        $show20->save();

        $show21 = New Show;
        $show21->name = 'Gorillaz/Paramore/Weezer';
        $show21->date = '30/07/2024';
        $show21->start_time = '18:00';
        $show21->end_time = '00:00';
        $show21->ticket_price = '200.00';
        $show21->description = 'Get ready for an epic night of music with Gorillaz, Paramore, and Weezer, as they come together for a genre-blending concert experience that cannot be missed.';
        $show21->venue_id = 1;
        $show21->timestamps;
        $show21->save();

        $show22 = New Show;
        $show22->name = 'Kajagoogoo: World Tour';
        $show22->date = '01/08/2024';
        $show22->start_time = '18:00';
        $show22->end_time = '22:00';
        $show22->ticket_price = '80.00';
        $show22->description = 'Embark on a global musical journey with Kajagoogoo as they take you through their iconic hits on their world tour.';
        $show22->venue_id = 4;
        $show22->timestamps;
        $show22->save();

        $show23 = New Show;
        $show23->name = 'ABBA: World Tour';
        $show23->date = '04/08/2024';
        $show23->start_time = '18:00';
        $show23->end_time = '22:00';
        $show23->ticket_price = '100.00';
        $show23->description = 'Get ready to dance and sing along to the timeless classics of ABBA on their world tour.';
        $show23->venue_id = 1;
        $show23->timestamps;
        $show23->save();

        $show24 = New Show;
        $show24->name = 'ABBA: World Tour';
        $show24->date = '05/08/2024';
        $show24->start_time = '18:00';
        $show24->end_time = '22:00';
        $show24->ticket_price = '100.00';
        $show24->description = 'Get ready to dance and sing along to the timeless classics of ABBA on their world tour.';
        $show24->venue_id = 1;
        $show24->timestamps;
        $show24->save();

    }
}
