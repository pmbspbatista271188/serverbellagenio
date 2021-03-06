<?php

use Illuminate\Database\Seeder;

use App\User;
use App\bank;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(BankSeeder::class);
    }
}
