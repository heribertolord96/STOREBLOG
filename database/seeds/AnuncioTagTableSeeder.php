<?php

use Illuminate\Database\Seeder;

class AnuncioTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\AnuncioTag::class, 20)->create();
    }
}
