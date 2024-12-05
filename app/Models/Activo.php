<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Activo extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'activos';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    //datos de la tabla
    protected $fillable = ['sap','nombre','descripcion','codigo','categoria','estado','lugar','fechaingreso','facturacompra','fechasalida','fechamantenimiento','actadestruccion','fechadestruccion','costomantenimiento','fotourl','deleted_at'];

// $hidden para proteger los datos en usuarios



    // Relaciones
    // Relación con la tabla Categorias (asumiendo que el modelo es Categoria)
    public function categoria()
    {
       return $this->belongsTo(Categoria::class, 'categoria', 'id_codigo');
    }


    // public function usuario()
    // {
    //     return $this->belongsTo(Usuario::class, 'ID', 'ID');
    // }

    public function mantenimientos()
    {
        return $this->hasMany(Mantenimiento::class, 'id_activo', 'ID');
    }

    // belongsTo
    // Esta relación se usa cuando un modelo "pertenece a" otro modelo. Es una relación de muchos a uno


    //     hasMany
    // La relación hasMany se usa cuando un modelo "tiene muchos" registros en otro modelo. Es una relación de uno a muchos

    // belongsToMany
    // belongsToMany se usa para una relación de muchos a muchos
// filtros


}
