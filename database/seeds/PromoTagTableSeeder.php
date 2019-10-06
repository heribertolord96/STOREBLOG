<?php

use Illuminate\Database\Seeder;

class PromoTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Blogmodels\PromocionTag::class, 10)->create();
    }
}
