<?php

namespace Database\Seeders;

use App\Models\Dispositivo;
use Illuminate\Database\Seeder;

class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dispositivo::factory(10)->create();
    }
}
