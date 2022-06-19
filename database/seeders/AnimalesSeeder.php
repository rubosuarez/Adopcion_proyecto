<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animales;

class AnimalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Lucas',
            'edad' =>'10',
            'observaciones'=>'Lucas es un perro muy cariñoso'
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Chispas',
            'edad' =>'7',
            'observaciones'=>'Chispas es un gato que le gusta jugar',
        ]);


        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Toby',
            'edad' =>'5',
            'observaciones'=>'Toby es un perro muy tranquilo',
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Rocky',
            'edad' =>'5',
            'observaciones'=>'Rocky es un gato muy tranquilo',
        ]);

        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Max',
            'edad' =>'5',
            'observaciones'=>'Max es un perro muy tranquilo',
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Pandora',
            'edad' =>'3',
            'observaciones'=>'Pandora es una gata muy tranquilo',
        ]);

        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Luna',
            'edad' =>'5',
            'observaciones'=>'Luna es una perra muy tranquilo',
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Tizon',
            'edad' =>'1',
            'observaciones'=>'Tizon es un gato muy cariñoso',
        ]);

        Animales::create([
            'id_razas'=> '1',
            'nombre' =>'Lola',
            'edad' =>'6',
            'observaciones'=>'Lola es una perrina muy cariñoso',
        ]);

        Animales::create([
            'id_razas'=> '2',
            'nombre' =>'Mickey',
            'edad' =>'1',
            'observaciones'=>'Mickey es un gato muy cariñoso',
        ]);
        
    }
}
