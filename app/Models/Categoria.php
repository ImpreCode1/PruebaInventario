<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['id_codigo','nombre'];


public function activo()
    {
        return $this->hasMany(activo::class, 'activo', 'categoria');
    }

}
