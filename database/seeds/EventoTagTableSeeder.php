<?php

use Illuminate\Database\Seeder;

class EventoTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\EventoTag::class, 20)->create();
    }
}
