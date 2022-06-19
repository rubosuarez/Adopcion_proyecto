<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tipoanimal;

class TipoanimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipoanimal::create([

        'tipo' => 'perro',
           
            
        ]);

        Tipoanimal::create([

         'tipo' => 'gato',
   
    
        ]);
    }
}
