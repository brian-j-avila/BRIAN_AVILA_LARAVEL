<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudiantesController extends Controller
{

    public function index()
    {
        $datos['estudiantes'] = estudiantes::paginate();
        return view('estudiantes.index', $datos);
    }


    public function create()
    {
        return view('estudiantes.create');
    }


    public function store(Request $request)
    {
        $validacion = [
            'nombre' => 'required|string|max:90',
            'primerapel' => 'required|string|max:90',
            'segundoapel' => 'required|string|max:90',
            'correo' => 'required|string|max:90'
            
        ];
        $msj = [
            'required' => 'El :attribute es requerido',
            'foto.required'=>'la foto es requerida'
        ];
        $this->validate($request, $validacion, $msj);
        $datosestudiantes = request()->except('_token');
        if ($request->hasFile('foto')) {
            $datosestudiantes['foto'] = $request->file('foto')->store('uploads', 'public');
        }
        estudiantes::insert($datosestudiantes);
        
        return redirect('estudiantes')->with('mensaje','Registro de estudiante realizado correctamente');

    }


    public function show(estudiantes $estudiantes)
    {
    }


    public function edit($id)
    {

        $estudiantes = estudiantes::findOrFail($id);
        return view('estudiantes.update', compact('estudiantes'));
    }


    public function update(Request $request, $id)
    {
        $validacion = [
            'nombre' => 'required|string|max:90',
            'primerapel' => 'required|string|max:90',
            'segundoapel' => 'required|string|max:90',
            'correo' => 'required|string|max:90'
        ];
        $msj = [
            'required' => 'El :attribute es requerido',
            'foto.required'=>'la foto es requerida'
        ];
        $this->validate($request, $validacion, $msj);

        $datos = request()->except('_token', '_method');

        if ($request->hasFile('foto')) {
            $estudiantes = estudiantes::findOrFail($id);
            if ($estudiantes->foto && Storage::disk('public')->exists($estudiantes->foto)) {
                Storage::disk('public')->delete($estudiantes->foto);
            }
            $datos['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        estudiantes::where('id', '=', $id)->update($datos);
        $estudiantes = estudiantes::findOrFail($id);
        return redirect('estudiantes')->with('mensaje','Edición de estudiante realizada correctamente');
    }


    public function destroy($id)
    {

        $estudiantes = estudiantes::findOrFail($id);
        if ($estudiantes->foto && Storage::disk('public')->exists($estudiantes->foto)) {
            Storage::disk('public')->delete($estudiantes->foto);
        }
        estudiantes::destroy($id);

        return redirect('estudiantes')->with('mensaje','Registro  de estudiante eliminado correctamente');

    }
}
