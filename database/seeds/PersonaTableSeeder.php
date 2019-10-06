<?php

use Illuminate\Database\Seeder;

class PersonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personas')->insert(
            [
                'id' => '1', //id_persona
                'nombre' => 'Heriberto', 
                'tipo_documento' => 'RFC',          
                'num_documento' => ('230296'),
                'direccion'=>'Enrique Segoviano # 8',
                'telefono'=>'013441036501',
                'email'=>'heribertolord@gmail.com'
            ]);

            DB::table('personas')->insert(
                [
                    'id' => '2', //id_persona
                    'nombre' => 'Juan', 
                    'tipo_documento' => 'RFC',          
                    'num_documento' => ('051194'),
                    'direccion'=>'Enrique Segoviano # 71',
                    'telefono'=>'013441036501',
                    'email'=>'cleo_dnit@gmail.com'
                ]);

           
    }
    
}
