<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
    use HasFactory;

    protected $table = 'mantenimientos';
    protected $primaryKey = 'ID';
    public $timestamps = false;


    protected $fillable = ['id_activo','factura','fechamantenimiento','descripcion','fechafinmantenimiento'];


    public function activo()
    {
        return $this->belongsTo(Activo::class, 'id_activo', 'ID');
    }

}
