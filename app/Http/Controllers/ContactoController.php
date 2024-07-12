<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos', compact('contactos'));
    }

    public function create()
    {
        return view('contactos');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre_empresa' => 'required|string|max:255',
            'numero_identificacion' => 'required|numeric|digits_between:1,13',
            'telefono' => 'required|string|max:255',
            'correo' => 'required|string|max:255',
            'nombre_persona' => 'required|string|max:255',
            'fecha' => 'required|date',
        ]);
    
        // Intentar convertir la fecha desde varios formatos comunes
        $fecha = Carbon::parse($request->fecha)->format('Y-m-d');
    
        Contacto::create([
            'nombre_empresa' => $request->nombre_empresa,
            'numero_identificacion' => $request->numero_identificacion,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'nombre_persona' => $request->nombre_persona,
            'fecha' => $fecha,
        ]);
    
        return redirect()->route('contactos.index')->with('success', 'Gracias por ponerte en contacto con Gestión Técnica de Riesgos del Trabajo. Estaremos en contacto contigo pronto para coordinar una demostración de nuestro sistema. Esperamos colaborar en el crecimiento de tu empresa y en la mejora de su productividad, siempre enfocados en la seguridad, salud y bienestar de tus trabajadores.');
    }
}
