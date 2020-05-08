<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Muiris Griffin',
            'email' => 'admin@admin.com',
            'is_admin' => 1,
            'password' => bcrypt('123456'),
        ]);
    }
}
