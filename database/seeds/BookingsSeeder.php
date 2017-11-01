<?php

use Illuminate\Database\Seeder;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('bookings')->insert([
        [
          'title' => 'Niet beschikbaar',
          'start' => '2017-09-11',
          'color' => '#b30000'
        ],
        [
          'title' => 'Niet beschikbaar',
          'start' => '2017-09-12',
          'color' => '#b30000'
        ],
        [
          'title' => 'Niet beschikbaar',
          'start' => '2017-09-13',
          'color' => '#b30000'          
        ]]);
    }
}
