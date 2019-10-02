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
        $this->call(CategoriaTableSeeder::class);
        $this->call(EventoTableSeeder::class);
        $this->call(PromicionTableSeeder::class);
        $this->call(AnuncioTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(ProductoTableSeeder::class);

        $this->call(ProductoTagTableSeeder::class);
        $this->call(PromoTagTableSeeder::class);
        $this->call(AnuncioTagTableSeeder::class);
        $this->call(EventoTagTableSeeder::class);
        
    }
}
