<?php

use Illuminate\Database\Seeder;
use App\Models\Stype;

class StypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stype::create(['name' => 'Concrete footpath']);
        Stype::create(['name' => 'Grass Verge']);
        Stype::create(['name' => 'Tarmac']);
        Stype::create(['name' => 'Other']);
    }
}
