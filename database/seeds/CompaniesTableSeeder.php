<?php

use Illuminate\Database\Seeder;

use App\Models\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => 'Foreman',
        ]);
        Company::create([
            'name' => 'General Operative',
        ]);
        Company::create([
            'name' => 'Plant Operator',
        ]);
        Company::create([
            'name' => 'Masons',
        ]);
    }
}
