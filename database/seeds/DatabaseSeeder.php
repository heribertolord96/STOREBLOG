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
        $this->call(TiendasTableSeeder::class);
        $this->call(TagsTableSeeder::class);   
    }
}
