<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(ZonesTableSeeder::class);
        // $this->call(WoasTableSeeder::class);
        // $this->call(DmasTableSeeder::class);
        // $this->call(TypesTableSeeder::class);
        // $this->call(StypesTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
    }
}
