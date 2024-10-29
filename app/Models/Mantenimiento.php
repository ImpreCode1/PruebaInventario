<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;
protected $fillable = ['id_activo','fechamantenimiento','descripcion'];


public function activo()
    {
        return $this->belongsTo(activo::class, 'activo', 'ID');
    }

}
