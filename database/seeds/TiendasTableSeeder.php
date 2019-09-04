<?php

use Illuminate\Database\Seeder;

class TiendasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\Tienda::class, 120)->create();
    }
}
