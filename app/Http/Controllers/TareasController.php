<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TareasController extends Controller
{
    public function index()
    {
        $tareas = Tarea::all();
        //$tareas = DB::table('tareas') ->get();
        return view('tareas.indexTareas',compact('tareas'));
    }

    public function create()
    {
        return view('tareas.formTareas');
    }

    public function store(Request $request)
    {
         //Validacion y limpieza
        $request->validate([
            'tarea' => 'required|min:5|max:255',
            'descripcion' => ['required','min:5'],
            'categoria' => 'required',
        ]);

        $tarea = new Tarea();
        $tarea->tarea = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->tipo = $request->categoria;

        //Guardar BD
        $tarea->save();

        //Redireccionar
        return redirect('/tarea');
    }

    public function show()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}

