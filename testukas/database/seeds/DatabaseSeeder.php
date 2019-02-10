<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $letters = 'ABCDEFGHIJKLMNOPRSTUVZ';
        $maxIndex = strlen($letters) - 1;
        // $this->call(UsersTableSeeder::class);
        for($i = 0; $i < 1000; $i++){
            $date = new DateTime();
            $letter1 = $letters[rand(0, $maxIndex)];
            $letter2 = $letters[rand(0, $maxIndex)];
            $letter3 = $letters[rand(0, $maxIndex)];
            $number = $letter1 . $letter2 . $letter3 . " " . rand(0, 9) . rand(0, 9) .rand(0, 9);
            $distance = rand(1000, 5000);
            $time = rand(12, 25);
            $radar = new \App\Radar();
            $radar->date=$date;
            $radar->number=$number;
            $radar->distance=$distance;
            $radar->time=$time;
            $radar->save();
        }
    }
}
