<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    use HasFactory;

    //datos de la tabla
    protected $fillable = ['nombre','descripcion','codigo','categoria','estado','lugar','fechaingreso','facturacompra','fechasalida','fechamantenimiento','costomantenimiento','Fotourl'];

// $hidden para proteger los datos en usuarios


    // Relaciones
    // Relación con la tabla Categorias (asumiendo que el modelo es Categoria)
    public function categoria()
    {
        return $this->belongsTo(categoria::class, 'categoria', 'id_codigo');
    }


    // belongsTo
    // Esta relación se usa cuando un modelo "pertenece a" otro modelo. Es una relación de muchos a uno


    //     hasMany
    // La relación hasMany se usa cuando un modelo "tiene muchos" registros en otro modelo. Es una relación de uno a muchos

    // belongsToMany
    // belongsToMany se usa para una relación de muchos a muchos
}
