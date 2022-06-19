<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adopcion;

class AdopcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Adopcion::create([

        'id_clientes'=>'1',
        'id_animales'=>'2',
        'fecha_adopcion'=>'2018-03-20',
        'fecha_devolucion'=>'2020-05-15',
        'observaciones'=>'Es un animal',   
       ]);
    }
}
      