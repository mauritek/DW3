<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Profesor;

class ProfesoresController extends Controller
{
    /*INDEX PROFESORES*/
    public function index()
    {
        //Obtener datos por ORM Eloquent    
        $profesores = Profesor::paginate(3);
        //Obtener datos por el metodo get
        //$profesores=DB::table('profesores');
        //->get();

        return view('profesores.index', compact('profesores'));
    }

    /* CREAR PROFESOR */
    public function crear(Request $request)
    {
        Profesor::create([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'ci' => $request->input('ci'),
            'gmail' => $request->input('gmail'),
            'fecha_nacimiento' => $request->input('fecha_nacimiento'),
            'direccion' => $request->input('direccion'),
            'profesion' => $request->input('profesion'),
            'materia' => $request->input('materia'),
        ]);
        return redirect()->route('index')->with('success', 'Se ha creado correctamente.');
    }

    /* FORMULARIO */
    public function formulario()
    {
        return view('profesores.formulario');
    }

    /* BORRAR PROFESOR */
    public function eliminar($id)
    {
        $profesores = Profesor::find($id);
        $profesores->delete();
        return redirect()->route('index')->with('danger', 'Se ha borrado correctamente.');
    }

    /* EDITAR PROFESOR */
    public function editar($id)
    {
        $profesores = Profesor::find($id);
        return view('profesores.editar', compact('profesores'));
    }
    public function actualizar(Request $request, $id)
    {
        $profesores = Profesor::find($id);
        $profesores->nombre = $request->input('nombre');
        $profesores->apellido = $request->input('apellido');
        $profesores->ci = $request->input('ci');
        $profesores->gmail = $request->input('gmail');
        $profesores->fecha_nacimiento = $request->input('fecha_nacimiento');
        $profesores->direccion = $request->input('direccion');
        $profesores->profesion = $request->input('profesion');
        $profesores->materia = $request->input('materia');
        $profesores->save();
        return redirect()->route('index')->with('warning', 'Se ha editado correctamente.');
    }

    /* VER PROFESOR */
    public function ver($id)
    {
        $profesores = Profesor::find($id);
        return view('profesores.ver', compact('profesores'));
    }

    /* BUSCAR PROFESOR */
    public function buscar(Request $request) {
        $buscar = $request->input('buscar');
        $profesores = Profesor::where(function ($query) use ($buscar) {
        $query->where('nombre', 'like', "%$buscar%")
            ->orWhere('apellido', 'like', "%$buscar%")
            ->orWhere('ci', 'like', "$buscar")
            ->orWhere('gmail', 'like', "$buscar")
            ->orWhere('fecha_nacimiento', 'like', "$buscar")
            ->orWhere('direccion', 'like', "$buscar")
            ->orWhere('profesion', 'like', "$buscar")
            ->orWhere('materia', 'like', "$buscar");
        })->paginate(3);
        $vacio = $profesores->isEmpty();
        return view('profesores.index', compact('profesores', 'vacio'));
    }
}
