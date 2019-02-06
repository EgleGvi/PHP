<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RadarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('radars')->insert([
            'date' => Carbon::create(2017, 01, 01),
            'number' => 'AAA001',
            'distance' => 10,
            'time' => 11
        ]);
    }
}
