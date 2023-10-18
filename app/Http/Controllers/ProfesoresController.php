<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profesor;

class ProfesoresController extends Controller
{
    function index() {
        $profesores = Profesor::paginate(3);

        return view('profesores.index', compact('profesores'));
    }

    function nuevo() {
        return view('profesores.nuevo');
    }

    function cargarProfesor(Request $request) {
        $profesor = new Profesor;
        $profesor->nombre = $request->nombre;
        $profesor->apellidos = $request->apellido;
        $profesor->ci = $request->ci;
        $profesor->email = $request->email;
        $profesor->fecha_nacimiento = $request->fecha_nacimiento;
        $profesor->direccion = $request->direccion;
        $profesor->profesion = $request->profesion;
        $profesor->materia = $request->materia;
        $profesor->save();

        return redirect()->route('profesores.index')->with('mensaje', 'Profesor registrado exitosamente');
    }

    function editar($id) {
        $profesor = Profesor::find($id);

        return view('profesores.editar', compact('profesor', 'id'));
    }

    function modificar(Request $request) {
        $profesor = Profesor::find($request->id);
        $profesor->nombre = $request->nombre;
        $profesor->apellidos = $request->apellido;
        $profesor->ci = $request->ci;
        $profesor->email = $request->email;
        $profesor->fecha_nacimiento = $request->fecha_nacimiento;
        $profesor->direccion = $request->direccion;
        $profesor->profesion = $request->profesion;
        $profesor->materia = $request->materia;
        $profesor->save();

        return redirect()->route('profesores.index')->with('mensaje', 'Profesor moficiado exitosamente');
    }

    function eliminar($id) {
        $profesor = Profesor::find($id);
        $profesor->delete();

        return redirect()->route('profesores.index')->with('mensaje', 'Profesor eliminado exitosamente');
    }

    
}