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

    	//dd(profession_seeder::class);


        // $this->call(UsersTableSeeder::class);
        $this->call(profession_seeder::class);
    }
}
