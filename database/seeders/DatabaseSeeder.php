<?php

namespace Database\Seeders;

use App\Models\Bundle;
use App\Models\Feeling;
use App\Models\FeelingMusic;
use App\Models\Member;
use App\Models\Membership;
use App\Models\Music;
use App\Models\Payement;
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
            'email' => 'samer@live.com',
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

        FeelingMusic::create([
            'feeling_id' => 1,
            'music_id' => 1
        ]);
        FeelingMusic::create([
            'feeling_id' => 1,
            'music_id' => 2
        ]);FeelingMusic::create([
            'feeling_id' => 1,
            'music_id' => 3
        ]);FeelingMusic::create([
            'feeling_id' => 1,
            'music_id' => 4
        ]);FeelingMusic::create([
            'feeling_id' => 1,
            'music_id' => 5
        ]);



    }
}
