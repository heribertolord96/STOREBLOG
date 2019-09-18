<?php

use Illuminate\Database\Seeder;

class PromicionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\Promocion::class, 40)->create();
    }
}
