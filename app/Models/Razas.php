<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Razas extends Model
{
    use HasFactory;

    protected $fillable = [
        'raza',


    ];

    public function Tipo_Animal()
    {
        return $this->belongsToMany(tipo::class)->withTimestamps();  
        {
            
        }
        
    }
}
