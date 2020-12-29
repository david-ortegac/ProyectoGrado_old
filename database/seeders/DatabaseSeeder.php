<?php

namespace Database\Seeders;

use App\Models\ConsumoElectrico;
use App\Models\Rol;
use App\Models\User;
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
        $this->call(RolSeeder::class);

        User::create([
            'rols_id'=>'1',
            'name'=>'David Ortega',
            'email' =>'davidortegacadena@gmail.com',
            'password'=>bcrypt('David312483'),
        ]);

        User::factory(9)->create();
        $this->call(LocationSeeder::class);
        $this->call(TipoDispositivoSeeder::class);
        $this->call(DispositivoSeeder::class);
        $this->call(ConsumoElectricoSeeder::class);
    }
}
