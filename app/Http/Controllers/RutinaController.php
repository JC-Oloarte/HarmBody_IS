<?php

namespace App\Http\Controllers;

use App\Models\Rutina;
use App\Models\Paciente;
use App\Models\Usuario;
use App\Models\DetalleRutina;
use App\Models\Ejercicio;
use Illuminate\Http\Request;

/**
 * Class RutinaController
 * @package App\Http\Controllers
 */
class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutinas = Rutina::select('rutinas.*', 'pacientes.Nombre as NomPaciente' , 'usuarios.NomUsuario')
                            ->join('pacientes','rutinas.id_paciente', '=', 'pacientes.id_paciente')
                            ->join('usuarios','rutinas.id_usuario', '=', 'usuarios.id_usuario')
                            ->paginate(10);
        return view('rutina.index', compact('rutinas'))
            ->with('i', (request()->input('page', 1) - 1) * $rutinas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutina = new Rutina();
        $paciente = Paciente::select('id_Paciente', 'Nombre')->get();
        $usuario = Usuario::select('id_usuario', 'NomUsuario')->get();
        return view('rutina.create', compact('rutina', 'paciente', 'usuario'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Rutina::$rules);

        $rutina = Rutina::create($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $rutina = Rutina::select('rutinas.*', 'pacientes.Nombre as NomPaciente' , 'usuarios.NomUsuario')
                            ->join('pacientes','rutinas.id_paciente', '=', 'pacientes.id_paciente')
                            ->join('usuarios','rutinas.id_usuario', '=', 'usuarios.id_usuario')->find($id);
        if($rutina->Estatus==0){
            return view('rutina.show2', compact('rutina'));
        }
        $detalleRutinas = DetalleRutina::where('id_rutina','=', $id)->paginate(10);
        $ejercicios = Ejercicio::select('ejercicios.id_ejercicio', 'Nombre', 'Descripcion', 'ejercicios.Estatus', 'ejercicios.created_at', 'ejercicios.updated_at')
                                ->join('detalle_rutinas','ejercicios.id_ejercicio', '=', 'detalle_rutinas.id_ejercicio')
                                ->where('detalle_rutinas.id_rutina','=', $id)
                                ->where('ejercicios.Estatus','=', 1)->paginate(10);
        return view('rutina.show', compact('rutina', 'detalleRutinas', 'ejercicios'))
        ->with('i', (request()->input('page', 1) - 1) * $detalleRutinas->perPage())
        ->with('j', (request()->input('page', 1) - 1) * $ejercicios->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutina = Rutina::find($id);
        $paciente = Paciente::select('id_Paciente', 'Nombre')->get();
        $usuario = Usuario::select('id_usuario', 'NomUsuario')->get();
        return view('rutina.edit', compact('rutina', 'paciente', 'usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rutina $rutina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rutina $rutina)
    {
        request()->validate(Rutina::$rules);

        $rutina->update($request->all());

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rutina = Rutina::find($id)->delete();

        return redirect()->route('rutinas.index')
            ->with('success', 'Rutina deleted successfully');
    }
    
}
