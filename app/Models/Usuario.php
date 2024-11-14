<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Usuario extends Model
{


    use HasFactory;
    use SoftDeletes;

    protected $table = 'usuarios';
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = ['nombre', 'email', 'role','contrasena'];

    protected $hidden = ['contrasena'];

    public function activo()
    {
        return $this->belongsTo(Activo::class, 'ID', 'ID');
    }
}
