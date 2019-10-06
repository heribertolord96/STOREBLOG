<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert(
            [
                'id' => '1', //id_persona
                'user_name' => 'admin',             
            'password' => bcrypt('1234'),
            'condicion'=>'1'
            ]);

            DB::table('usuario')->insert(
                ['id' => '2', //id_persona
                'user_name' => 'master', 
            
            'password' => bcrypt('1234'),
            'condicion'=>'1'
                ]);
                //seed on roles table
            DB::table('roles')->insert(
                ['id'=>2,
                'nombre'=>'Master'
                
                ]);
                DB::table('roles')->insert(
                    ['id'=>1,
                    'nombre'=>'Administrador'
                    
                    ]);
                    //seeding on usuario rol
                    DB::table('usuario_rol')->insert(
                        ['rol_id'=>1,
                        'usuario_id'=>1,
                        'estado'=>1
                        ]);
                DB::table('usuario_rol')->insert(
                    ['rol_id'=>2,
                    'usuario_id'=>2,
                    'estado'=>1
                    ]);
    }
    
}
