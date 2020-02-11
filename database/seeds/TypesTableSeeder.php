<?php

use Illuminate\Database\Seeder;
use App\Models\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create(['name' => 'Service Repair']);
        Type::create(['name' => '3" CI']);
        Type::create(['name' => '5" CI']);
        Type::create(['name' => '3" HDPE']);
        Type::create(['name' => '4" PVC']);
        Type::create(['name' => '6" PVC']);
        Type::create(['name' => '8" PVC']);
        Type::create(['name' => '5" AC']);
        Type::create(['name' => '7" AC']);
        Type::create(['name' => '9" AC']);
        Type::create(['name' => 'Other']);
    }
}
