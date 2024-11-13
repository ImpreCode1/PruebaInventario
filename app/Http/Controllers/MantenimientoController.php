<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use App\Models\Mantenimiento;
use Illuminate\Http\Request;

class MantenimientoController extends Controller
{
    public function index()
    {
        $activos = Activo::with('mantenimientos')->get();
        return view('mantenimiento.index', compact('activos'));
    }

    public function verMantenimiento($id)
    {
        $activo = Activo::with('mantenimientos')->findOrFail($id);
        return view('mantenimiento', compact('activo'));
    }

    public function store(Request $request, $id)
    {
        $activo = Activo::findOrFail($id);
        $mantenimiento = new Mantenimiento();
        if ($request->hasFile('factura')) {
            $archivo = $request->file('factura');
            $filename = time() . '_' . $archivo->getClientOriginalName();
            $archivo->move(public_path('facturas'), $filename);
            $mantenimiento->factura = 'facturas/' . $filename;
        }
        $mantenimiento->id_activo = $activo->ID;
        $mantenimiento->fechamantenimiento = $request->fechamantenimiento;
        $mantenimiento->descripcion = $request->descripcion;

        $activo->estado = 'En Mantenimiento';
        $activo->save();
        $mantenimiento->save();
        return redirect()
            ->route('ver.mantenimiento', $activo->ID)
            ->with('success', 'Mantenimiento registrado correctamente.');
    }

    public function terminarMantenimiento($id)
    {
        $mantenimiento = Mantenimiento::findOrFail($id);
        $activo = Activo::findOrFail($mantenimiento->id_activo);

        
        $mantenimiento->fechafinmantenimiento = now();
        $mantenimiento->save();

       
        $activo->estado = 'Buen estado';
        $activo->save();

        return redirect()
            ->route('ver.mantenimiento', $activo->ID)
            ->with('success', 'Mantenimiento finalizado correctamente.');
    }
}
