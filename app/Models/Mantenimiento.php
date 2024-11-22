<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

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









        public function subirFactura(Request $request, $id)
        {
            $request->validate([
                'factura' => 'required|mimes:jpeg,png,pdf|max:2048', // Validar tipo de archivo y tamaño
            ]);

            $mantenimiento = Mantenimiento::findOrFail($id);

            if ($request->hasFile('factura')) {
                // Eliminar la factura anterior si existe
                if ($mantenimiento->factura && Storage::exists('public/' . $mantenimiento->factura)) {
                    Storage::delete('public/' . $mantenimiento->factura);
                }

                // Guardar el nuevo archivo
                $filePath = $request->file('factura')->store('facturas', 'public');
                $mantenimiento->factura = $filePath;
                $mantenimiento->save();
            }

            return back()->with('success', 'Factura subida correctamente');
        }


}
