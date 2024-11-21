<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mantenimiento extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $table = 'mantenimientos';
    protected $primaryKey = 'ID';
    public $timestamps = false;


    protected $fillable = ['id_activo','factura','fechamantenimiento','descripcion','fechafinmantenimiento','fechaingreso','estado'];


    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id_activo', 'ID');
    }

}
