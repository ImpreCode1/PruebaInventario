<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    protected $primaryKey = 'id_codigo';
    public $incrementing = false;
    public $timestamps = false;


    protected $fillable = ['id_codigo','nombre'];


    public function activo()
    {
        return $this->hasMany(Activo::class, 'categoria', 'id_codigo');
    }

}
