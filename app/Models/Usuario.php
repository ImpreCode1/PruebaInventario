<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'email', 'rol'];

    protected $hidden = ['contrasena'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'activo', 'ID');
    }
}
