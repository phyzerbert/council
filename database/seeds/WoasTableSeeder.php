<?php

use Illuminate\Database\Seeder;
use App\Models\Woa;

class WoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Woa::create(['name' => 'Corbally']);
        Woa::create(['name' => 'Ballincurrig - Lisgould']);
        Woa::create(['name' => 'Walshtown Beg']);
        Woa::create(['name' => 'Clash Leamlara']);
        Woa::create(['name' => 'Dungourney']);
        Woa::create(['name' => 'Bilberry']);
        Woa::create(['name' => 'Tibbotstown']);
        Woa::create(['name' => 'Midleton']);
        Woa::create(['name' => 'Whitegate Regional']);
        Woa::create(['name' => 'Cloyne']);
        Woa::create(['name' => 'Mogeely']);
        Woa::create(['name' => 'Inch']);
        Woa::create(['name' => 'Ballykilty']);
        Woa::create(['name' => 'Killeagh']);
        Woa::create(['name' => 'Kilcraheen']);
        Woa::create(['name' => 'Ballymacoda']);
        Woa::create(['name' => 'Knockadoon']);
        Woa::create(['name' => 'Youghal']);
    }
}
