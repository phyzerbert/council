<?php

use Illuminate\Database\Seeder;
use App\Models\Zone;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zone::create([
            'name' => 'Zone1',
            'rate' => '45',
        ]);
        
        Zone::create([
            'name' => 'Zone2',
            'rate' => '58',
        ]);
        
        Zone::create([
            'name' => 'Zone3',
            'rate' => '25',
        ]);
        
        Zone::create([
            'name' => 'Zone4',
            'rate' => '45',
        ]);
    }
}
