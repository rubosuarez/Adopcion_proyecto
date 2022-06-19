<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class TablaPermisosSeeder extends Seeder


{


public function run()
{
    $permisos = [
        
        'ver-rol',
        'crear-rol',
        'editar-role',
        'borrar-role',


        'ver-animales',
        'crear-animales',
        'editar-animales',
        'borrar-animales'
        
  
        
];

    foreach ($permisos as $permiso){
        Permission::create(['name'=>$permiso]);
    }

}
}