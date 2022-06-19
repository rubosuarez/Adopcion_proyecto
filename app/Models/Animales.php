<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animales extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_razas',
        'nombre',
        'edad',
        'Imagen',
        'observaciones',
        

    ];

    public function Razas()
    {
        return $this->belongsToMany(raza::class)->withTimestamps();  
        {
            
        }
        
    }
}
