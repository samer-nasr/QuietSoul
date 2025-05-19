<?php

namespace Database\Seeders;

use App\Models\Bundle;
use App\Models\Feeling;
use App\Models\FeelingMusic;
use App\Models\FeelingSport;
use App\Models\Member;
use App\Models\Membership;
use App\Models\Music;
use App\Models\Payement;
use App\Models\Sport;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'samer',
            'email' => 'samnasrer@gmail.com',
            'password' => Hash::make('password'),
            'gender' => 'Male',
            'job' => 'Developer',
            'address' => 'Baabdat',
            'education' => 'Master',
            'nationality' => 'Lebanese',
            'nb_children' => 2,
            'marital_status' => 'Single',
            'dob' => '1990-01-01',
        ]);

        Feeling::create([
            'name' => 'Happy',
            'emoji'=> '😊',
        ]);
        Feeling::create([
            'name' => 'Gratitude',
            'emoji' => '🙏'
        ]);
        Feeling::create([
            'name' => 'Joyful',
            'emoji' => '😄'

        ]);Feeling::create([
            'name' => 'Exhaustion',
            'emoji' => '😩'

        ]);Feeling::create([
            'name' => 'Tension',
            'emoji' => '😣'

        ]);Feeling::create([
            'name' => 'Distress',
            'emoji' => '😰'

        ]);Feeling::create([
            'name' => 'Depression',
            'emoji' => '😔'

        ]);Feeling::create([
            'name' => 'Emptiness',
            'emoji' => '🕳'

        ]);Feeling::create([
            'name' => 'Solitude',
            'emoji' => '🧘'

        ]);Feeling::create([
            'name' => 'Isolation',
            'emoji' => '🏚'

        ]);Feeling::create([
            'name' => 'Sad',
            'emoji' => '😢'

        ]);Feeling::create([
            'name' => 'Hopeful',
            'emoji' => '🌟'

        ]);Feeling::create([
            'name' => 'Anxious',
            'emoji' => '😟'

        ]);Feeling::create([
            'name' => 'Motivated',
            'emoji' => '🚀'

        ]);Feeling::create([
            'name' => 'Lonely',
            'emoji' => '🥺'

        ]);Feeling::create([
            'name' => 'Calm',
            'emoji' => '🧘‍♀'

        ]);Feeling::create([
            'name' => 'Peaceful',
            'emoji' => '☁'

        ]);Feeling::create([
            'name' => 'Overwhelmed',
            'emoji' => '🌪'

        ]);Feeling::create([
            'name' => 'Confident',
            'emoji' => '🦁'

        ]);Feeling::create([
            'name' => 'Frustrated',
            'emoji' => '⚡'

        ]);

        Music::create([
            'link' => 'https://www.youtube.com/embed/1ZYbU82GVz4'
        ]);

        Music::create([
            'link' => 'https://www.youtube.com/embed/DWcJFNfaw9c'
        ]);
        Music::create([
            'link' => 'https://www.youtube.com/embed/AKy6Jx59fis'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/lFcSrYw-ARY'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/lh4JdZTJe7k'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/3NycM9lYdRI'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/CkchxBUtXu4'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/sHoh7Ww13dE'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/4khIPP--FDU'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/cstlsQ_LdcM'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/M9mN9U44MEI'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/5_1OOKcawd8'
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/dC7cw0urYoI'
        ]);Music::create([
            'link' => ''
        ]);Music::create([
            'link' => 'https://www.youtube.com/embed/9Q634rbsypE'
        ]);

        
        $sport_links= [
    "https://www.youtube.com/embed/4pLUleLdwY4", 
    "https://www.youtube.com/embed/v7AYKMP6rOE",
    "https://www.youtube.com/embed/sTANio_2E0Q",
    "https://www.youtube.com/embed/OQ6NfFIr2jw",
    "https://www.youtube.com/embed/ml6cT4AZdqI",
    "https://www.youtube.com/embed/Nw2oBIrQGLo",
    "https://www.youtube.com/embed/WtGE0Uz9zSE",
    "https://www.youtube.com/embed/Xs6gah4DseA",
    "https://www.youtube.com/embed/40bPxbFUCj4",
    "https://www.youtube.com/embed/_HJXKkY1pBs",
    "https://www.youtube.com/embed/9MazN_6wdqI",  
    "https://www.youtube.com/embed/U_68GChh3Qs", 
    "https://www.youtube.com/embed/ys2P5UsDSgQ",
    "https://www.youtube.com/embed/HI-hKN-dVLY",
    "https://www.youtube.com/embed/QisYLeLT70s",
    "https://www.youtube.com/embed/XChk73pyyjA",
    "https://www.youtube.com/embed/8dKBDesugPU",
    "https://www.youtube.com/embed/iIZahcl1PfA",
    "https://www.youtube.com/embed/pU8V70yRW-w",  
    "https://www.youtube.com/embed/2_SE2gQwXoo",
    "https://www.youtube.com/embed/iCkek3txJL4",
    "https://www.youtube.com/embed/9xZcnOjLNZ0",
    "https://www.youtube.com/embed/xLS9uQQQyB0",
    "https://www.youtube.com/embed/DVGlvhNaKl8" 
    ];
    foreach($sport_links as $link)
    {
        Sport::create([
            'link' => $link
        ]);
    }
   

        

        $feelings = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach($feelings as $feeling)
        {
            // rand(1, 15);
            $nb_sports = rand(4, 10);
            $nb_music = rand(4, 10);
            $previous_music = [];
            $previous_sport = [];
            for($i = 0; $i < $nb_music; $i++)
            {
                $music_id = rand(1, 15);
                while(in_array($music_id, $previous_music))
                {
                    $music_id = rand(1, 15);
                }
                FeelingMusic::create([
                    'feeling_id' => $feeling,
                    'music_id' => $music_id
                ]);
            }
            for($i = 0; $i < $nb_sports; $i++)
            {
                $sport_id = rand(1, 24);
                while(in_array($sport_id, $previous_sport))
                {
                    $sport_id = rand(1, 24);
                }
                FeelingSport::create([
                    'feeling_id' => $feeling,
                    'sport_id' => $sport_id
                ]);
            }
        }



    }
}
