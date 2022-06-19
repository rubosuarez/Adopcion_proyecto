<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_clientes',
        'id_animales',
        'fecha_adopcion',
        'fecha_devolucion',
        'observaciones',

    ];
    public function Clientes()
    {
        return $this->belongsToMany(cliente::class)->withTimestamps();  
        {
            
        }
        
    }
    public function  Animales()
    {
        return $this->belongsToMany(animal::class)->withTimestamps();  
        {
            
        }
        
    }


}
