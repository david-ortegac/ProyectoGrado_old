<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'id' => '1',
            'descripcion' => 'SUPERADMIN',
        ]);

        Rol::create([
            'id' => '2',
            'descripcion' =>'ADMINISTRADOR',
        ]);

        Rol::create([
            'id' => '3',
            'descripcion' => 'USUARIO',
        ]);



    }
}
