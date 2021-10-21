<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        {
            Cliente::create(["nombre"  => "Cliente 1"]);
            Cliente::create(["nombre"  => "Cliente 2"]);
            Cliente::create(["nombre"  => "Cliente 3"]);
            Cliente::create(["nombre"  => "Cliente 4"]);
            Cliente::create(["nombre"  => "Cliente 5"]);
            Cliente::create(["nombre"  => "Cliente 6"]);
            Cliente::create(["nombre"  => "Cliente 7"]);
            Cliente::create(["nombre"  => "Cliente 8"]);
            Cliente::create(["nombre"  => "Cliente 9"]);
        }
    }
}
