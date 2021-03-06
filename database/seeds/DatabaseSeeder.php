<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(JobSeeder::class);
         $this->call(BidSeeder::class);
    }
}
