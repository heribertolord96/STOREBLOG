<?php

use Illuminate\Database\Seeder;

class ProductoTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\ProductoTag::class, 20)->create();
    }
}
