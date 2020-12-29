<?php

namespace Database\Seeders;

use App\Models\ConsumoElectrico;
use Illuminate\Database\Seeder;

class ConsumoElectricoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ConsumoElectrico::factory(200)->create();
    }
}
