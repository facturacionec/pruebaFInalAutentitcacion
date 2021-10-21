<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create(["nombre"  => "producto 1"]);
        Producto::create(["nombre"  => "producto 2"]);
        Producto::create(["nombre"  => "producto 3"]);
        Producto::create(["nombre"  => "producto 4"]);
        Producto::create(["nombre"  => "producto 5"]);
        Producto::create(["nombre"  => "producto 6"]);
        Producto::create(["nombre"  => "producto 7"]);
        Producto::create(["nombre"  => "producto 8"]);
        Producto::create(["nombre"  => "producto 9"]);
    }
    
}
