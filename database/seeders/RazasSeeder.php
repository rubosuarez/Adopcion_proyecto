<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Razas;

class RazasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Razas::create([

            'id_tipo' =>'1',
            'raza' =>'Beagle',
        ]);
   
    Razas::create([

        'id_tipo' =>'2',
        'raza' =>'Siames',
       ]);
    
    Razas::create([

        'id_tipo' =>'1',
        'raza' =>'Golden retriever',
    ]);

    Razas::create([

        'id_tipo' =>'2',
        'raza' =>'Bengala',
    ]);

    Razas::create([
        'id_tipo' =>'1',
        'raza' =>'Caniche',
    ]);

     Razas::create([
        'id_tipo' =>'2',
        'raza'=>'Birmano',
     ]);
   
     Razas::create([
        'id_tipo'=>'1',
        'raza'=>'Chihuahua',
     ]);

     Razas::create([
        'id_tipo'=>'2',
        'raza'=>'Persa',
     ]);

     Razas::create([
        'id_tipo'=>'1',
        'raza'=>'Cocker',
     ]);

     Razas::create([
        'id_tipo'=>'2',
        'raza'=>'Bombay',
     ]);
}
}