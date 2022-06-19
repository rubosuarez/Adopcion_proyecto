<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Clientes;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clientes::create([

            'nombre' =>'Ruben',
            'apellidos'=>'Suarez',
            'direccion'=>'C/Uria',
            'localidad'=>'Oviedo',
            'telefono'=>'684751236',
            'email'=>'ruben@gmail.com'
            
        ]);

        Clientes::create([
        
            'nombre' =>'Javier',
            'apellidos'=>'Fernandez',
            'direccion'=>'C/Begoña',
            'localidad'=>'Gijon',
            'telefono'=>'685825436',
            'email'=>'javier13@gmail.com'
            
        ]);

        Clientes::create([

            'nombre' =>'Maria',
            'apellidos'=>'Rodriguez',
            'direccion'=>'C/Alonso de Ojeda',
            'localidad'=>'Aviles',
            'telefono'=>'684253687',
            'email'=>'maria@gmail.com'
        ]);

        Clientes::create([

            'nombre' =>'Daniel',
            'apellidos'=>'Gonzalez',
            'direccion'=>'C/Uria',
            'localidad'=>'Oviedo',
            'telefono'=>'683529874',
            'email'=>'daniel5@gmail.com'
        ]);

        Clientes::create([

            'nombre' =>'Clara',
            'apellidos'=>'Alvarez',
            'direccion'=>'C/la Constitución',
            'localidad'=>'Gijon',
            'telefono'=>'687532169',
            'email'=>'clara@gmail.com'
        ]);
    }
}
