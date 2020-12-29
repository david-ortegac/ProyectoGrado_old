<?php

namespace Database\Seeders;

use App\Models\TipoDispositivo;
use Illuminate\Database\Seeder;

class TipoDispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDispositivo::factory(10)->create();
    }
}
